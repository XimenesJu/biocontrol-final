/*
 * Ajax script to send forms after validation proccess
 *
 * @author Vander Amorin
 * https://vanderamorin.com
 *
 */
window.App = window.App || {};

window.App.SendForm = function() {
	'use strict';

	const methods = {

		sendAction: function(form) {

			const msg = form.data('msgsuccess'),
				  msgError = form.data('msgerror'),
				  msgErrorCaptcha = form.data('msgerror_captcha'),
				  redirect = form.data('redirect'),
				  feedback = form.find('.feedback'),
				  grecaptcha_action = 'bioctrl_WGwPVr55K3LRftRB',
				  grecaptcha_site_key = form.data('grecaptcha'),
				  submitButton = {
					el: form.find('button[type=submit]'),
						initialContent: form.find('button[type=submit]').html(),
						newContent: form.data('msgsending')
				  }

			form.on('submit', ev => {
				ev.preventDefault();

				if(!form.valid()) return false;

				submitButton.el.html(submitButton.newContent);
				submitButton.el.prop('disabled', true);

				let ajaxConfig = {
					type: 'POST',
					url: form.attr('action'),
					beforeSend: function() {

						if(recaptcha.length) {
		
							if(recaptcha.find('[name="g-recaptcha-response"]')[0].value != '') {
								return true;
							}
		
							submitButton.el.html(submitButton.initialContent);
							submitButton.el.prop('disabled', false);
		
							return false;
						}
		
						return true;
					},
					success: function(data) {
						if(data == 'success') {

							if(redirect) {
								window.location.href = redirect;
								return true;
							}

							feedback.html(methods.alerts.success(msg))
							form.trigger('reset');
						}
						else if(data == 'error_captcha') {
							feedback.html(methods.alerts.error(msgErrorCaptcha));
						}
						else {
							feedback.html(methods.alerts.error(msgError));
						}

						submitButton.el.html(submitButton.initialContent);
						submitButton.el.prop('disabled', false);
						$('html, body').animate({ scrollTop: feedback.offset().top }, 600);
					},

					error: function(err) {

						if(err == 'error_captcha') {
							feedback.html(methods.alerts.error(msgErrorCaptcha));
						}
						else {
							feedback.html(methods.alerts.error(msgError));
						}

						submitButton.el.html(submitButton.initialContent);
						submitButton.el.prop('disabled', false);
						$('html, body').animate({ scrollTop: feedback.offset().top }, 600);
					}
				}

				let makeFormData = () => {

					let fileInput = form.find('input[type="file"]').length;

					if (fileInput) {
						ajaxConfig.data = new FormData(form[0]);
						ajaxConfig.processData = false;
						ajaxConfig.contentType = false;
						ajaxConfig.enctype = 'multipart/form-data';
					}

					else ajaxConfig.data = form.serialize();
				}

				if (grecaptcha_site_key) {

					grecaptcha.ready(function () {
						form.find('.g-recaptcha-response, .g-recaptcha-action').remove();

						grecaptcha.execute(grecaptcha_site_key, { action: grecaptcha_action }).then(function (token) {
							form.prepend('<input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response" value="' + token + '">');
							form.prepend('<input type="hidden" class="g-recaptcha-action" name="g-recaptcha-action" value="' + grecaptcha_action + '">');

							makeFormData()
							$.ajax(ajaxConfig);
						},
						function(err) {
							submitButton.el.html(submitButton.initialContent);
							submitButton.el.prop('disabled', false);
						});

					});

				} else {
					makeFormData();
					$.ajax(ajaxConfig);
				}

			});
		},

		alerts: {
			success: function(text) {

				return `<div class="alert alert-success">
							${text}
						</div>`;
			},

			error: function(text) {

				return `<div class="alert alert-warning">
							${text}
						</div>`;
			}
		}
	};

	return methods;
};