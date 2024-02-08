<div class="row">

    <div class="col-sm-4">1
        <canvas id="chart4"></canvas>
    </div>
    <div class="col-sm-4">2
        <canvas id="chart5"></canvas>
    </div>
    <div class="col-sm-4">%25
        <canvas id="chart6"></canvas>
    </div>

</div>

<script>

    var chartLabels = @json($data['labels']);
    var chartData = @json($data['data']);
    console.log('chart data',chartData)

    // if (myTabData === 'live') {
    chartDisplay("chart4", "Chart 4", chartLabels, chartData)
    chartDisplay("chart5", "Chart 5", chartLabels, chartData)
    chartDisplay("chart6", "Chart 6", chartLabels, chartData)
    // } else {
    // chartDisplay("chart4", "Chart 4", chartLabels, chartData)
    // chartDisplay("chart5", "Chart 5", chartLabels, chartData)
    // chartDisplay("chart6", "Chart 6", chartLabels, chartData)

    // }

    function chartDisplay(chartId, chartTitle, labels, datasets) {
        chartDestroy(chartId);
        var ctx = document.getElementById(chartId).getContext('2d');
        return new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Data',
                    data: datasets,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                indexAxis: 'y',
                plugins: {
                    title: {
                        display: true,
                        text: chartTitle
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    function chartDestroy(chartId) {
        let chart = Chart.getChart(chartId);
        if (chart) {
            chart.destroy();
        }
    }
</script>
