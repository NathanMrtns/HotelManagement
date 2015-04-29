$(document).ready(function () {
   var $startDate = $("#startDate");
   $startDate.datepicker({
   	minDate: 0,
   	onSelect: function(date){
   		var selectedDate = $("#startDate").datepicker('getDate');
   		$("#endDate").datepicker('option', "minDate", selectedDate);
   	}
   })
   if($("#startDate").datepicker('getDate')==null){
   	var minDate = 0;
   }
   $("#endDate").datepicker({
      minDate: minDate,
   	onSelect: function(date){
   	  var selectedEndDate = $("#endDate").datepicker('getDate');
   	  $("#startDate").datepicker('option', "maxDate", selectedEndDate);
   	}
   })

});