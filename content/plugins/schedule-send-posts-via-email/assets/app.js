jQuery(document).ready(function($) {

	$(".chzn-select").chosen();

	$('#sspe-datepicker').datetimepicker({
	    hour: 6,
	    minute: 15,
	    dateFormat: "D MM d, yy",
	    separator: ' ',
		timeFormat : 'h:mmtt z',
		showTimezone : true,
		timezone : 'CST',
		timezoneList : [{
			value : 'EST',
			label : 'Eastern'
		}, {
			value : 'CST',
			label : 'Central'
		}, {
			value : 'MST',
			label : 'Mountain'
		}, {
			value : 'PST',
			label : 'Pacific'
		}]
	});

});
