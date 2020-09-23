(function ($) {
  'use strict';
  $(function () {
    if ($('#dashoard-line-chart').length) {
      var lineChartCanvas = $("#dashoard-line-chart").get(0).getContext("2d");
      var data = {
        labels: ["2013", "2014", "2014", "2015", "2016", "2017", "2018"],
        datasets: [{
          label: 'Profit',
          data: [1, 3, 7, 1, 3, 5, 3, 2, 6, 8, 8, 8, 5],
          borderColor: [
            'rgba(231, 72, 126, 1)'
          ],
          borderWidth: 2,
          fill: false
        }]
      };
      var options = {
        scales: {
          yAxes: [{
            display: false
          }],
          xAxes: [{
            display: false
          }]
        },
        legend: {
          display: false
        },
        elements: {
          point: {
            radius: 0
          }
        },
        stepsize: 100
      };
      var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: data,
        options: options
      });
    }
    if ($("#dashboard-bar-chart").length) {
      var CurrentChartCanvas = $("#dashboard-bar-chart").get(0).getContext("2d");
      var CurrentChart = new Chart(CurrentChartCanvas, {
        type: 'bar',
        data: {
          labels: ["1", "3", "6", "9", "12", "15", "18", "21", "24", "27"],
          datasets: [{
              label: 'SNOOZED',
              data: [330, 380, 230, 400, 309, 430, 340, 310, 280, 300],
              backgroundColor: '#8862e0',
              borderColor: '#8862e0',
              borderWidth: 0
            },
            {
              label: 'COMPLETED',
              data: [375, 440, 284, 450, 386, 480, 400, 365, 365, 435],
              backgroundColor: '#49bbce',
              borderColor: '#49bbce',
              borderWidth: 0
            },
            {
              label: 'OVERDUE',
              data: [425, 480, 324, 490, 426, 520, 440, 405, 425, 475],
              backgroundColor: '#e7487e',
              borderColor: '#e7487e',
              borderWidth: 0
            }
          ]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 20,
              bottom: 0
            }
          },
          scales: {
            yAxes: [{
              display: false,
              gridLines: {
                display: false
              }
            }],
            xAxes: [{
              stacked: true,
              ticks: {
                beginAtZero: true,
                fontColor: "#bdbcbe"
              },
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
                display: false
              },
              barPercentage: 0.2
            }]
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 0
            }
          }
        }
      });
    }
    if ($("#dashboardTrendingProgress").length) {
      var bar = new ProgressBar.Circle(dashboardTrendingProgress, {
        strokeWidth: 15,
        trailWidth: 15,
        easing: 'easeInOut',
        duration: 1400,
        from: {
          color: '#f2f2f4',
          width: 10
        },
        to: {
          color: '#00df59',
          width: 15
        },
        step: function (state, circle) {
          circle.path.setAttribute('stroke', state.color);
          circle.path.setAttribute('stroke-width', state.width);
        }
      });
      bar.animate(.84);
    }
    if ($("#dashboardTrendingBars").length) {
      var CurrentChartCanvas = $("#dashboardTrendingBars").get(0).getContext("2d");
      var CurrentChart = new Chart(CurrentChartCanvas, {
        type: 'bar',
        data: {
          labels: ["1", "3", "6", "9", "12", "15"],
          datasets: [{
            data: [100, 130, 180, 170, 130, 170],
            backgroundColor: '#8862e0',
            borderColor: '#8862e0',
            borderWidth: 0
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 0,
              bottom: 0
            }
          },
          scales: {
            yAxes: [{
              display: false
            }],
            xAxes: [{
              display: false,
              barPercentage: 0.8
            }]
          },
          legend: {
            display: false
          }
        }
      });
    }
  });
})(jQuery);