/**
 * Public API to validate form fields
 * 
 * @dependencies
 * jQuery Mask Plugin v1.7.5
 * http://jsfiddle.net/d29m6enx/2/
 */
window.App = window.App || {};

window.App.ValidForm = function() {
	'use strict';

	const phoneMask = function(input) {

		let maskBehavior = function(val) {
				return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
			},

			options = {
				onKeyPress: function(val, e, field, options){
					field.mask(maskBehavior.apply({}, arguments), options);
				}
			};

		$('input.'+input).mask(maskBehavior, options);
	}

	const mask = function(input) {

		if(input == 'cnpj') $('input.'+input).mask('99.999.999/9999-99');
		if(input == 'cpf') $('input.'+input).mask('999.999.999-99');
		if(input == 'cep') $('input.'+input).mask('99999-999');
	}

	const apiPublica = {

		validate: function(form, campos) {
			let key,
				formRules = {},
				formMsg = {};

			for(key in campos) {
				let validRules,
					validMsg;

				// verifica se é um campo tipo email
				if(campos[key][1] == "email") {
					validRules = {
						required: true,
						email: true
					};

					validMsg = {
						required: form.data('required'),
						email: form.data('msgismail')
					};
				}
				
				else {
					validRules = {
						required: true
					};

					validMsg = form.data('required');
				}

				// adiciona mascara
				if(campos[key][2] == "phone")
					phoneMask(campos[key][2]);

				else mask(campos[key][2]);

				formRules[campos[key][0]] = validRules;
				formMsg[campos[key][0]] = validMsg;
			}

			// implementa o metodo validate
			if(!form.hasClass('no-validate-fields'))
				form.validate({rules: formRules, messages: formMsg});
		}
	}

	return apiPublica;
};