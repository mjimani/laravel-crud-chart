<div class="row">

    <div class="col-sm-4">1
        <canvas id="chart1"></canvas>
    </div>
    <div class="col-sm-4">2
        <canvas id="chart2"></canvas>
    </div>
    <div class="col-sm-4">3
        <canvas id="chart3"></canvas>
    </div>

</div>

<script>

    var chartLabels = @json($data['labels']);
    var chartData = @json($data['data']);

    chartDisplay("chart1", "Chart 1", chartLabels, chartData)
    chartDisplay("chart2", "Chart 2", chartLabels, chartData)
    chartDisplay("chart3", "Chart 3", chartLabels, chartData)

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
