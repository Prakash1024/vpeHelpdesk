import ApexCharts from 'apexcharts';

export function renderCharts() {
  // Donut Chart Data and Options
  const donutChartData = {
    series: [44, 55, 13, 43, 22],
    labels: ['A', 'B', 'C', 'D', 'E'],
  };

  const donutChartOptions = {
    series: donutChartData.series,
    labels: donutChartData.labels,
    chart: {
      type: 'donut',
      width: 400, // Specify the width here
      height: 300, // Specify the height here
    },
  };

  // RadialBar Chart Data and Options
  const radialBarChartData = {
    series: [70, 52, 26, 32],
    labels: ['Apple', 'Mango', 'Banana', 'Orange'],
  };

  const radialBarChartOptions = {
    series: radialBarChartData.series,
    labels: radialBarChartData.labels,
    chart: {
      type: 'radialBar',
      width: 400, // Specify the width here
      height: 300, // Specify the height here
    },
    plotOptions: {
      radialBar: {
        hollow: {
          margin: 15,
          size: '70%',
        },
        dataLabels: {
          showOn: 'always',
          name: {
            offsetY: -10,
            show: true,
            color: '#888',
            fontSize: '13px',
          },
          value: {
            color: '#111',
            fontSize: '30px',
            show: true,
          },
        },
      },
    },
  };

  const donutChartElement = document.querySelector('#donut-chart');
  const radialBarChartElement = document.querySelector('#radial-bar-chart');

  if (donutChartElement && radialBarChartElement) {
    const donutChart = new ApexCharts(donutChartElement, donutChartOptions);
    donutChart.render();

    const radialBarChart = new ApexCharts(radialBarChartElement, radialBarChartOptions);
    radialBarChart.render();
  }
}
