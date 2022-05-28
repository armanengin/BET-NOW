<?php
 
$dataPoints = array(
	array("y" => 25, "label" => "January"),
	array("y" => 15, "label" => "February"),
	array("y" => 25, "label" => "March"),
	array("y" => 5, "label" => "April"),
	array("y" => 10, "label" => "May"),
	array("y" => 0, "label" => "June"),
	array("y" => 20, "label" => "July"),
    array("y" => 5, "label" => "August"),
	array("y" => 10, "label" => "September"),
	array("y" => 0, "label" => "October"),
	array("y" => 20, "label" => "November"),
    array("y" => 20, "label" => "December")
);
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Performance By Month"
	},
	axisY: {
		title: "Percentage"
	},
	data: [{
		type: "line",
		type: "spline",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width:100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 