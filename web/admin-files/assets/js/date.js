jQuery(document).ready(function () {
    jQuery("#datepicker").datepicker({
      format: "dd-mm-yyyy",
      startDate: "+1d"
    });
  });
  jQuery(document).ready(function () {
    jQuery("#id_StartDate").datepicker({
      dateFormat: "yy/mm/dd",
      startDate: "0d",
      minDate: 0,
      highlightWeek: true
    });
  });