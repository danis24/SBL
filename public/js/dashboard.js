(function ($) {
  'use strict';
  $(function () {
    if ($("#chart-sales").length) {
      var areaData = {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8"],
        datasets: [{
          data: [0, 245, 75, 150, 100, 150, 50, 100],
          backgroundColor: [
            'rgba(235, 105, 143, .7)'
          ],
          borderColor: [
            '#eb698f'
          ],
          borderWidth: 1,
          fill: 'origin',
          label: "Booking"
        },
        {
          data: [0, 100, 200, 100, 150, 75, 200, 50],
          backgroundColor: [
            'rgba(119, 111, 249, .9)'
          ],
          borderColor: [
            '#776ff9'
          ],
          borderWidth: 1,
          fill: 'origin',
          label: "Approve"
        }
        ]
      };
      var areaOptions = {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
          filler: {
            propagate: false
          }
        },
        scales: {
          xAxes: [{
            ticks: {
              display: true,
              beginAtZero: true,
              fontColor: '#696969'
            },
            gridLines: {
              display: false,
              drawBorder: false,
              color: 'transparent',
              zeroLineColor: '#eeeeee'
            }
          }],
          yAxes: [{
            gridLines: {
              drawBorder: false,
              display: true,
              color: '#b8b8b8',
            },
            ticks: {
              display: true,
              beginAtZero: true,
              fontColor: '#696969'
            }
          }]
        },
        legend: {
          display: false
        },
        tooltips: {
          enabled: true
        },
        elements: {
          line: {
            tension: .25
          },
          point: {
            radius: 0
          }
        }
      }
      var salesChartCanvas = $("#chart-sales").get(0).getContext("2d");
      var salesChart = new Chart(salesChartCanvas, {
        type: 'line',
        data: areaData,
        options: areaOptions
      });
      document.getElementById('sales-legend').innerHTML = salesChart.generateLegend();
    }
    if ($("#dashboard-monthly-analytics").length) {
      var ctx = document.getElementById('dashboard-monthly-analytics').getContext("2d");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Arl', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
          datasets: [{
            label: "Approve Booking",
            borderColor: 'rgba(77, 124, 255, .8)',
            backgroundColor: 'rgba(77, 124, 255, .8)',
            pointRadius: 0,
            fill: true,
            borderWidth: 1,
            fill: 'origin',
            data: [0, 0, 30, 0, 0, 0, 50, 0, 30, 11, 23, 45]
          },
          {
            label: "Pending Booking",
            borderColor: 'rgba(241, 155, 84, .8)',
            backgroundColor: 'rgba(241, 155, 84, .8)',
            pointRadius: 0,
            fill: true,
            borderWidth: 1,
            fill: 'origin',
            data: [0, 0, 0, 40, 10, 50, 0, 0]
          },
          {
            label: "Approve",
            borderColor: 'rgba(235, 105, 143, .9)',
            backgroundColor: 'rgba(235, 105, 143, .9)',
            pointRadius: 0,
            fill: true,
            borderWidth: 1,
            fill: 'origin',
            data: [0, 35, 0, 0, 30, 0, 0, 0, 67, 23, 12, 45]
          }
          ]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
            position: "top"
          },
          scales: {
            xAxes: [{
              ticks: {
                display: true,
                beginAtZero: true,
                fontColor: '#696969'
              },
              gridLines: {
                display: false,
                drawBorder: false,
                color: 'transparent',
                zeroLineColor: '#eeeeee'
              }
            }],
            yAxes: [{
              gridLines: {
                drawBorder: false,
                display: true,
                color: '#b8b8b8',
              },
              categoryPercentage: 0.5,
              ticks: {
                display: true,
                beginAtZero: true,
                stepSize: 20,
                max: 80,
                fontColor: '#696969'
              }
            }]
          },
        },
        elements: {
          point: {
            radius: 0
          }
        }
      });
      document.getElementById('js-legend').innerHTML = myChart.generateLegend();
    }
    if ($("#traffic-chart").length) {
      var gradientStrokeBlue = ctx.createLinearGradient(0, 0, 0, 181);
      gradientStrokeBlue.addColorStop(0, '#6486fc');
      gradientStrokeBlue.addColorStop(1, '#0e4cfb');
      var gradientLegendBlue = 'linear-gradient(145deg, #6486fc, #0e4cfb)';

      var gradientStrokeRed = ctx.createLinearGradient(0, 0, 0, 150);
      gradientStrokeRed.addColorStop(0, 'rgba(238, 143, 154, 1)');
      gradientStrokeRed.addColorStop(1, 'rgba(233, 79, 133, 1)');
      var gradientLegendRed = 'linear-gradient(to right, rgba(238, 143, 154, 1), rgba(233, 79, 133, 1))';

      var trafficChartData = {
        datasets: [{
          data: [40, 60],
          backgroundColor: [
            gradientStrokeBlue,
            gradientStrokeRed
          ],
          hoverBackgroundColor: [
            gradientStrokeBlue,
            gradientStrokeRed
          ],
          borderColor: [
            gradientStrokeBlue,
            gradientStrokeRed
          ],
          legendColor: [
            gradientLegendBlue,
            gradientLegendRed
          ]
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
          'Facebook',
          'Google',
          'Linkedin',
        ]
      };
      var trafficChartOptions = {
        responsive: true,
        animation: {
          animateScale: true,
          animateRotate: true
        },
        legend: false,
        legendCallback: function (chart) {
          var text = [];
          text.push('<ul>');
          for (var i = 0; i < trafficChartData.datasets[0].data.length; i++) {
            text.push('<li><h2 class="mb-3">' + trafficChartData.datasets[0].data[i] + '%</h2><div class="legend-content"><span class="legend-dots" style="background:' +
              trafficChartData.datasets[0].legendColor[i] +
              '"></span>' + trafficChartData.labels[i] + '</div>');
            text.push('</li>');
          }
          text.push('</ul>');
          return text.join('');
        },
        cutoutPercentage: 86
      };
      var trafficChartPlugins = {
        beforeDraw: function (chart) {
          var width = chart.chart.width,
            height = chart.chart.height,
            ctx = chart.chart.ctx;

          ctx.restore();
          var fontSize = 1.2;
          ctx.font = fontSize + "em sans-serif";
          ctx.textBaseline = "middle";
          ctx.fillStyle = "#76838f";

          var text = "1.2 M",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 2;

          ctx.fillText(text, textX, textY);
          ctx.save();
        }
      }
      var trafficChartCanvas = $("#traffic-chart").get(0).getContext("2d");
      var trafficChart = new Chart(trafficChartCanvas, {
        type: 'doughnut',
        data: trafficChartData,
        options: trafficChartOptions,
        plugins: trafficChartPlugins
      });
      $("#traffic-chart-legend").html(trafficChart.generateLegend());
    }
  });
})(jQuery);