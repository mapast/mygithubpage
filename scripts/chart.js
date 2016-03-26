Chart.types.Line.extend({
    name: "LineAlt",
    draw: function () {
        Chart.types.Line.prototype.draw.apply(this, arguments);

        var ctx = this.chart.ctx;
        var scale = this.scale;

        ctx.save();

        ctx.fillStyle = this.datasets[0].fillColor;
        ctx.beginPath();
        ctx.moveTo(scale.calculateX(0), scale.calculateY(0))
        this.datasets[0].points.forEach(function (point) {
            ctx.lineTo(point.x, point.y);
        })
        var copyA = this.datasets[1].points.slice(0).reverse();
        copyA.forEach(function (point) {
            ctx.lineTo(point.x, point.y);
        })
        //ctx.closePath();
        ctx.fill();

        ctx.fillStyle = this.datasets[1].fillColor;
        ctx.beginPath();
        ctx.moveTo(scale.calculateX(0), scale.calculateY(0))
        this.datasets[1].points.forEach(function (point) {
            ctx.lineTo(point.x, point.y);
        })
        ctx.closePath();
        ctx.fill();

        ctx.restore();
    }
});


var chartData = {
labels: ["0 to 2 mths", "3 to 12 mths", "1 to 3 yrs", "3 to 5 yrs", "5 to 12 yrs", "12 to 18 yrs", "Adults"],
datasets: [
        {
            fillColor: "rgba(229, 106, 73, 0.3)",
            strokeColor: "#FC5044",
            //pointColor: "#E52700",
        data: [12, 14, 12, 11, 10, 8.5, 7.5]
        },
        {
            fillColor: "rgba(200, 30, 100, 0.0)",
            //pointColor: "#E52700",
            strokeColor: "#FC5044",
        data: [18, 15, 14, 13, 11, 10, 9]
        },
    ]
}

var ctx = document.getElementById("lineChart").getContext("2d");
var myNewChart = new Chart(ctx).LineAlt(chartData, {
    bezierCurve: false,
    datasetFill: false,
    scaleOverride: true,
    scaleSteps: 5,
    scaleStepWidth: 3,
    scaleStartValue: 5,
    scaleFontSize: 18,
    animationEasing: "easeInQuart",
    responsive: true,
    pointDot : false,
     datasetStroke : true,
});
