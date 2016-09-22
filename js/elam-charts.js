var elam_charts = jQuery('.elam-chart');

elam_charts.each(function () {
    var chart_canvas = jQuery(this),
        value = chart_canvas.attr('data-value'),
        color = chart_canvas.attr('data-color'),
        diff = 100 - value;


    var data = {
        labels: [
            "Autres",
            "Contribution "
        ],
        datasets: [
            {
                data: [diff, value],
                backgroundColor: [
                    "#d6d6d6",
                    color
                ]
            }]
    };

    var options = {
        legend: {
            display: false
        },
        tooltip: {
            enabled: false
        },
        animateScale: true
    }

    var myDoughnutChart = new Chart(chart_canvas, {
        type: 'doughnut',
        data: data,
        options: options
    });
})