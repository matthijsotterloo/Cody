$(document).ready(function(){
	$(function() {
		$( "#zoom" ).slider();
	});
	$('#workspace').draggable({ axis: 'x' });
$sliderValue="";
$("#slider").slider({                   
                value: 1,
                min: 0.5,
                max: 4,
                step: 0.01,
                slide: function(event, ui) {
                                $("#slider_value").val(ui.value);
                                $("#workspace").animate({ 'zoom': ui.value }, 5);
                          }
        });
        $("#slider_value").val($("#slider").slider("value"));
});