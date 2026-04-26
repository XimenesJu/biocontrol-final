/**
 * Applies validation to all forms on page load and bind 'sendForm' (ajax) to them
 * 
 * @dependencies
 * jquery-validation
 * jQuery-Mask-Plugin
 */
$(function() {

	const ValidForm = new window.App.ValidForm(),
		  SendForm = new window.App.SendForm(),
		  forms = $('form.validate-alta');

	if(forms.length > 0) {

		forms.each(function() {
			let form = $(this),
				inputsContactForm = [];

			form.find('input, textarea, select').each(function() {
				let element = $(this);

				if(element.hasClass('validate')) {

					let name = element.prop('name'),
						type = element.prop('type'),
						mask;

					if(element.attr('data-mask') === undefined)
						mask = false;

					else {
						mask = element.attr('data-mask');
						element.addClass(mask);
					}

					inputsContactForm.push([name, type, mask]);
				}
			});

			ValidForm.validate(form, inputsContactForm);

			if(!form.hasClass('send-validation'))
				return;

			form.find('.feedback').html('');

			SendForm.sendAction(form);
		});
	}
});