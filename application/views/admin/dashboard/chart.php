<script>
window.onload = function () {

var options = {
	animationEnabled: true,
	title: {
		text: "Projects Overview"
	},
	data: [{
		type: "doughnut",
		innerRadius: "40%",
		showInLegend: true,
		legendText: "{label}",
		indexLabel: "{label}: #percent%",
		dataPoints: [
			{ label: "Completed Tasks", y: 6492917 },
			{ label: "Outstanding Tasks", y: 7380554 },
			{ label: "Completed Projects", y: 1610846 },
			{ label: "Outstanding Projects", y: 950875 },
			
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>