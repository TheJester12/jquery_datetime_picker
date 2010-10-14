jQuery.noConflict();
jQuery(document).ready(function()
{
  /**
  * Init date picker
  */
  jQuery(".field-date input, .repeatingdate input").datetimepicker(
    {
    	ampm: true,
   		timeFormat: 'h:mm tt', // e.g. 7:32 pm
		dateFormat: 'mm/dd/yy' // e.g., 12/14/1982
    }
  );
});