$(document).ready(function(){
	$(".btn-nuevo-evento").click(function(e){
		$("#modal_evento").modal("show");
	});

	$("#fecha").datepicker({format: "YYYY-mm-dd"})
});