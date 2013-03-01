jQuery(document).ready(function() {	
	jQuery('div.mmf > form').ajaxForm({
		beforeSubmit: mmfBeforeSubmit,
		dataType: 'json',
        success: mmfProcessJson
	});
	jQuery.fn.ajaxSubmit.debug = true;

  jQuery('div.mmf > form').each(function(i, n) {
    mmfToggleSubmit(jQuery(n));
  });
});

// Exclusive checkbox
function mmfExclusiveCheckbox(elem) {
  jQuery(elem.form).find('input:checkbox[@name="' + elem.name + '"]').not(elem).removeAttr('checked');
}

// Toggle submit button
function mmfToggleSubmit(form) {
  var submit = jQuery(form).find('input:submit');
  if (! submit.length) return;
  
  var acceptances = jQuery(form).find('input:checkbox.mmf-acceptance');
  if (! acceptances.length) return;
  
  submit.removeAttr('disabled');
  acceptances.each(function(i, n) {
    n = jQuery(n);
    if (n.hasClass('mmf-invert') && n.is(':checked') || ! n.hasClass('mmf-invert') && ! n.is(':checked'))
      submit.attr('disabled', 'disabled');
  });
}

function mmfBeforeSubmit(formData, jqForm, options) {	
	mmfClearResponseOutput();
	jQuery('img.ajax-loader', jqForm[0]).css({ visibility: 'visible' });  
    formData.push({name: '_mmf_is_ajax_call', value: 1});
	return true;
}

/*function parameterpass(textname)
{
	alert(textname);
	//$("#"+textname+"").datepicker();
	//alert("hi");
}*/

function mmfNotValidTip(into, message) {
  jQuery(into).append('<span class="mmf-not-valid-tip">' + message + '</span>');
	jQuery('span.mmf-not-valid-tip').mouseover(function() {
		jQuery(this).fadeOut('fast');
	});
	jQuery(into).find(':input').mouseover(function() {
		jQuery(into).find('.mmf-not-valid-tip').not(':hidden').fadeOut('fast');
	});
	jQuery(into).find(':input').focus(function() {
		jQuery(into).find('.mmf-not-valid-tip').not(':hidden').fadeOut('fast');
	});
}

function mmfProcessJson(data,responseText,xhr,jqForm) {

	jQuery('div.mmf form').hide();
    var mmfResponseOutput=jQuery("div.mmf-response-output");
   // mmfResponseOutput.css('display','block');
	mmfResponseOutput.addClass('mmf-mail-sent-ok');
	mmfResponseOutput.append("Thank you. Your email has been sent.").show('fast');
	
	
}

function isValidURL(url){ 
    var RegExp = /^(([\w]+:)?\/\/)?(([\d\w]|%[a-fA-f\d]{2,2})+(:([\d\w]|%[a-fA-f\d]{2,2})+)?@)?([\d\w][-\d\w]{0,253}[\d\w]\.)+[\w]{2,4}(:[\d]+)?(\/([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)*(\?(&?([-+_~.\d\w]|%[a-fA-f\d]{2,2})=?)*)?(#([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)?$/; 
    if(RegExp.test(url)){ 
        return true; 
    }else{ 
        return false; 
    } 
} 

function mmfClearResponseOutput() {
	jQuery('div.mmf-response-output').hide().empty().removeClass('mmf-mail-sent-ok mmf-mail-sent-ng mmf-validation-errors mmf-spam-blocked');
	jQuery('span.mmf-not-valid-tip').remove();
	jQuery('img.ajax-loader').css({ visibility: 'hidden' });
}
