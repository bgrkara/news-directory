(function ($) {
    'use strict';
    $(function () {
        function onRefresh(chart) {
            chart.data.datasets.forEach(function (dataset) {
                dataset.data.push({
                    x: Date.now(),
                    y: Math.random()
                });
            });
        }
        var lineChartStyleOption_1 = {
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
                    radius: 1
                },
                line: {
                    tension: 0
                }
            },
            stepsize: 100
        };
        var lineChartStyleOption_2 = {
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
                },
                line: {
                    tension: 0
                }
            },
            stepsize: 100
        };
        if ($('#source-graph-1').length) {
            var lineChartCanvas = $("#source-graph-1").get(0).getContext("2d");
            var data = {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7"],
                datasets: [{
                    label: 'Profit',
                    data: [1, 3, 7, 4, 1, 9, 6],
                    borderColor: warningColor,
                    borderWidth: 2,
                    fill: false
                }]
            };

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: data,
                options: lineChartStyleOption_1
            });
        }
        if ($('#source-graph-2').length) {
            var lineChartCanvas = $("#source-graph-2").get(0).getContext("2d");
            var data = {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7"],
                datasets: [{
                    label: 'Profit',
                    data: [1, 4, 8, 3, 4, 6, 1],
                    borderColor: successColor,
                    borderWidth: 2,
                    fill: false
                }]
            };

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: data,
                options: lineChartStyleOption_1
            });
        }
        if ($('#source-graph-3').length) {
            var lineChartCanvas = $("#source-graph-3").get(0).getContext("2d");
            var data = {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7"],
                datasets: [{
                    label: 'Profit',
                    data: [8, 12, 5, 4, 1, 12, 4],
                    borderColor: dangerColor,
                    borderWidth: 2,
                    fill: false
                }]
            };

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: data,
                options: lineChartStyleOption_1
            });
        }
        if ($('#source-graph-4').length) {
            var lineChartCanvas = $("#source-graph-4").get(0).getContext("2d");
            var data = {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7"],
                datasets: [{
                    label: 'Profit',
                    data: [6, 9, 3, 4, 2, 5, 6],
                    borderColor: warningColor,
                    borderWidth: 2,
                    fill: false
                }]
            };

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: data,
                options: lineChartStyleOption_1
            });
        }
        if ($("#trafficDoughnutChart").length) {
            var doughnutChartCanvas = $("#trafficDoughnutChart").get(0).getContext("2d");
            var doughnutPieData = {
                datasets: [{
                    data: [70, 20],
                    backgroundColor: [
                        primaryColor,
                        successColor
                    ],
                    borderColor: [
                        primaryColor,
                        successColor
                    ],
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    'Chrome',
                    'Firefox',
                    'Safari',
                    'Opera',
                    'IE',
                ]
            };
            var doughnutPieOptions = {
                cutoutPercentage: 70,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
                maintainAspectRatio: true,
                showScale: true,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                }
            };
            var doughnutChart = new Chart(doughnutChartCanvas, {
                type: 'doughnut',
                data: doughnutPieData,
                options: doughnutPieOptions
            });
        }
        if ($('#sourceLineChart').length) {
            var sourceLineChartCanvas = $("#sourceLineChart").get(0).getContext("2d");
            var sourceLineChart = new Chart(sourceLineChartCanvas, {
                type: 'line',
                data: {
                    labels: ["2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018"],
                    datasets: [{
                        label: 'Desktop',
                        data: [0, 16, 3, 5, 2, 12, 9, 3],
                        borderColor: successColor,
                        backgroundColor: successColor,
                        borderWidth: 2,
                        fill: false
                    }, {
                        label: 'Mobile',
                        data: [0, 23, 7, 12, 40, 17, 26, 13],
                        borderColor: primaryColor,
                        backgroundColor: primaryColor,
                        borderWidth: 2,
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    },
                    elements: {
                        point: {
                            radius: 2
                        }
                    },
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },
                    legend: false,
                    stepsize: 20,
                    scales: {
                        xAxes: [{
                            gridLines: {
                                color: 'rgba(0, 0, 0, 0)',
                                display: true
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                color: 'rgba(0, 0, 0, 0.05)',
                                display: true
                            }
                        }]
                    }
                }
            });
        }
        if ($('#statistics-graph-1').length) {
            var lineChartCanvas = $("#statistics-graph-1").get(0).getContext("2d");
            var gradientStrokeFill_1 = lineChartCanvas.createLinearGradient(1, 2, 1, 400);
            gradientStrokeFill_1.addColorStop(0, '#fff');
            gradientStrokeFill_1.addColorStop(1, infoColor);

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: {
                    labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7"],
                    datasets: [{
                        label: 'Profit',
                        data: [3, 9, 7, 5, 7, 2, 8],
                        borderColor: infoColor,
                        backgroundColor: gradientStrokeFill_1,
                        borderWidth: 2,
                        fill: true
                    }]
                },
                options: lineChartStyleOption_2
            });
        }
        if ($('#statistics-graph-2').length) {
            var lineChartCanvas = $("#statistics-graph-2").get(0).getContext("2d");
            var gradientStrokeFill_1 = lineChartCanvas.createLinearGradient(1, 2, 1, 400);
            gradientStrokeFill_1.addColorStop(0, '#fff');
            gradientStrokeFill_1.addColorStop(1, primaryColor);

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: {
                    labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7"],
                    datasets: [{
                        label: 'Profit',
                        data: [7, 9, 2, 2, 8, 7, 9],
                        borderColor: primaryColor,
                        backgroundColor: gradientStrokeFill_1,
                        borderWidth: 2,
                        fill: true
                    }]
                },
                options: lineChartStyleOption_2
            });
        }
        if ($('#statistics-graph-3').length) {
            var lineChartCanvas = $("#statistics-graph-3").get(0).getContext("2d");
            var gradientStrokeFill_1 = lineChartCanvas.createLinearGradient(1, 2, 1, 400);
            gradientStrokeFill_1.addColorStop(0, '#fff');
            gradientStrokeFill_1.addColorStop(1, warningColor);

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: {
                    labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7"],
                    datasets: [{
                        label: 'Profit',
                        data: [5, 4, 7, 2, 9, 2, 8],
                        borderColor: warningColor,
                        backgroundColor: gradientStrokeFill_1,
                        borderWidth: 2,
                        fill: true
                    }]
                },
                options: lineChartStyleOption_2
            });
        }
        if ($('#statistics-graph-4').length) {
            var lineChartCanvas = $("#statistics-graph-4").get(0).getContext("2d");
            var gradientStrokeFill_1 = lineChartCanvas.createLinearGradient(1, 2, 1, 400);
            gradientStrokeFill_1.addColorStop(0, '#fff');
            gradientStrokeFill_1.addColorStop(1, dangerColor);

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: {
                    labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7"],
                    datasets: [{
                        label: 'Profit',
                        data: [5, 2, 5, 2, 4, 4, 1],
                        borderColor: dangerColor,
                        backgroundColor: gradientStrokeFill_1,
                        borderWidth: 2,
                        fill: true
                    }]
                },
                options: lineChartStyleOption_2
            });
        }
        if ($('#review-rating-1').length) {
            $('#review-rating-1').barrating({
                theme: 'css-stars',
                showSelectedRating: false,
                initialRating: 4
            });
        }
        if ($('#review-rating-2').length) {
            $('#review-rating-2').barrating({
                theme: 'css-stars',
                showSelectedRating: false,
                initialRating: 5
            });
        }
        if ($('#review-rating-3').length) {
            $('#review-rating-3').barrating({
                theme: 'css-stars',
                showSelectedRating: false,
                initialRating: 3
            });
        }
        if ($('#review-rating-4').length) {
            $('#review-rating-4').barrating({
                theme: 'css-stars',
                showSelectedRating: false,
                initialRating: 4
            });
        }
        if ($('#review-rating-5').length) {
            $('#review-rating-5').barrating({
                theme: 'css-stars',
                showSelectedRating: false,
                initialRating: 2
            });
        }
        if ($('#statistics-chart').length) {
            var barChartCanvas = $("#statistics-chart").get(0).getContext("2d");
            var barChart = new Chart(barChartCanvas, {
                type: 'bar',
                data: {
                    labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", ],
                    datasets: [{
                            label: 'Revenue',
                            data: [39, 19, 25, 16, 31, 39, 23, 20, 23, 18],
                            backgroundColor: successColor,
                            borderColor: successColor,
                            borderWidth: 0
                        },
                        {
                            label: 'Sales',
                            data: [27, 12, 26, 15, 21, 27, 13, 19, 32, 22],
                            backgroundColor: primaryColor,
                            borderColor: primaryColor,
                            borderWidth: 0
                        }
                    ]
                },
                options: {
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },

                    scales: {
                        responsive: true,
                        maintainAspectRatio: true,
                        yAxes: [{
                            stacked: true,
                            display: false,
                            gridLines: {
                                color: 'rgba(0, 0, 0, 0.03)',
                            }
                        }],
                        xAxes: [{
                            stacked: true,
                            display: false,
                            barPercentage: 0.3,
                            gridLines: {
                                display: false,
                            }
                        }]
                    },
                    legend: {
                        display: false
                    }
                }
            });
        }
        if ($('#balance-chart-1').length) {
            var lineChartCanvas = $("#balance-chart-1").get(0).getContext("2d");
            var data = {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8"],
                datasets: [{
                    label: 'Balance',
                    data: [10, 2, 7, 3, 10, 0, 9, 0],
                    borderColor: primaryColor,
                    borderWidth: 2,
                    fill: false
                }]
            };

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
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
                            radius: 1
                        }
                    },
                    stepsize: 100
                }
            });
        }
        if ($('#balance-chart-2').length) {
            var lineChartCanvas = $("#balance-chart-2").get(0).getContext("2d");
            var data = {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8"],
                datasets: [{
                    label: 'Credit',
                    data: [4, 1, 7, 4, 1, 8, 2, 8],
                    borderColor: primaryColor,
                    borderWidth: 2,
                    fill: false
                }]
            };

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
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
                            radius: 1
                        }
                    },
                    stepsize: 100
                }
            });
        }
        if ($("#UsersDoughnutChart").length) {
            var doughnutChartCanvas = $("#UsersDoughnutChart").get(0).getContext("2d");
            var doughnutPieData = {
                datasets: [{
                    data: [80, 34, 100],
                    backgroundColor: [
                        successColor,
                        infoColor,
                        secondaryColor
                    ],
                    borderColor: [
                        successColor,
                        infoColor,
                        secondaryColor
                    ],
                }],
                labels: [
                    'Request',
                    'Email',
                ]
            };
            var doughnutPieOptions = {
                cutoutPercentage: 70,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
                maintainAspectRatio: true,
                showScale: true,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                }
            };
            var doughnutChart = new Chart(doughnutChartCanvas, {
                type: 'doughnut',
                data: doughnutPieData,
                options: doughnutPieOptions
            });
        }
        if ($('#conversionBarChart').length) {
            var barChartCanvas = $("#conversionBarChart").get(0).getContext("2d");
            var barChart = new Chart(barChartCanvas, {
                type: 'bar',
                data: {
                    labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10"],
                    datasets: [{
                        label: 'Amount Due',
                        data: [39, 19, 25, 16, 31, 39, 12, 18, 33, 24],
                        backgroundColor: primaryColor,
                        borderColor: primaryColor,
                        borderWidth: 0
                    }]
                },
                options: {
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },

                    scales: {
                        responsive: true,
                        maintainAspectRatio: true,
                        yAxes: [{
                            display: false,
                            gridLines: {
                                color: 'rgba(0, 0, 0, 0.03)',
                            }
                        }],
                        xAxes: [{
                            display: false,
                            barPercentage: 0.4,
                            gridLines: {
                                display: false,
                            }
                        }]
                    },
                    legend: {
                        display: false
                    }
                }
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
        if ($('#topSellingProducts').length) {
            var topSellingChartCanvas = $("#topSellingProducts").get(0).getContext("2d");

            var topSellingChart = new Chart(topSellingChartCanvas, {
                type: 'line',
                data: {
                    labels: ["2011", "2012", "2013", "2014", "2015", "2016", "2017"],
                    datasets: [{
                        label: 'Total Profit',
                        data: [150, 200, 150, 220, 350, 275, 365],
                        borderColor: primaryColor,
                        backgroundColor: '#E9F7FB',
                        borderWidth: 2,
                        fill: true
                    }, {
                        label: 'Total Sales',
                        data: [300, 400, 300, 440, 700, 550, 730],
                        borderColor: successColor,
                        backgroundColor: '#E9F7FB',
                        borderWidth: 2,
                        fill: true
                    }]
                },
                options: {
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
                            radius: 3
                        },
                        line: {
                            tension: 0
                        }
                    },
                    stepsize: 100
                }
            });
        }
        if ($("#realtime-statistics").length) {
            var realtimeChartCanvas = $("#realtime-statistics").get(0).getContext("2d");
            var realtimeChart = new Chart(realtimeChartCanvas, {
                type: 'bar',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                            label: 'Profit',
                            data: [330, 380, 230, 400, 309, 530, 340, 400, 490, 380, 300, 510],
                            backgroundColor: primaryColor,
                            borderColor: primaryColor,
                            borderWidth: 0
                        },
                        {
                            label: 'Target',
                            data: [600, 600, 600, 600, 600, 600, 600, 600, 600, 600, 600, 600],
                            backgroundColor: 'rgba(238, 242, 245, 1)',
                            borderColor: 'rgba(238, 242, 245, 1)',
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
                            top: 0,
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
                                fontColor: "#354168"
                            },
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                                display: false
                            },
                            barPercentage: 0.4
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
        if ($("#humanResouceDoughnutChart").length) {
            var doughnutChartCanvas = $("#humanResouceDoughnutChart").get(0).getContext("2d");
            var doughnutPieData = {
                datasets: [{
                    data: [20, 80, 85, 45],
                    backgroundColor: [
                        successColor,
                        primaryColor,
                        dangerColor,
                        secondaryColor
                    ],
                    borderColor: [
                        successColor,
                        primaryColor,
                        dangerColor,
                        secondaryColor
                    ],
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    'Human Resources',
                    'Manger',
                    'Other'
                ]
            };
            var doughnutPieOptions = {
                cutoutPercentage: 75,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
                maintainAspectRatio: true,
                showScale: true,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                }
            };
            var doughnutChart = new Chart(doughnutChartCanvas, {
                type: 'doughnut',
                data: doughnutPieData,
                options: doughnutPieOptions
            });
        }
        if ($("#trafficSourceDoughnutChart").length) {
            var doughnutChartCanvas = $("#trafficSourceDoughnutChart").get(0).getContext("2d");
            var doughnutPieData = {
                datasets: [{
                    data: [185, 85, 15],
                    backgroundColor: [
                        secondaryColor,
                        successColor,
                        dangerColor,

                    ],
                    borderColor: [
                        secondaryColor,
                        successColor,
                        dangerColor,

                    ],
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    'Human Resources',
                    'Manger',
                    'Other'
                ]
            };
            var doughnutPieOptions = {
                cutoutPercentage: 75,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
                maintainAspectRatio: true,
                showScale: true,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                }
            };
            var doughnutChart = new Chart(doughnutChartCanvas, {
                type: 'doughnut',
                data: doughnutPieData,
                options: doughnutPieOptions
            });
        }
        if ($('#todo-tags-1').length) {
            $('#todo-tags-1').tagsInput({
                'width': '100%',
                'interactive': true,
                'defaultText': 'Add More',
                'removeWithBackspace': true,
                'minChars': 0,
                'maxChars': 20
            });
        }
        if ($('#todo-tags-2').length) {
            $('#todo-tags-2').tagsInput({
                'width': '100%',
                'interactive': true,
                'defaultText': 'Add More',
                'removeWithBackspace': true,
                'minChars': 0,
                'maxChars': 20, // if not provided there is no limit
                'placeholderColor': '#666666'
            });
        }
        if ($("#salesPrdictionDoughnutChart").length) {
            var doughnutChartCanvas = $("#salesPrdictionDoughnutChart").get(0).getContext("2d");
            var doughnutPieData = {
                datasets: [{
                    data: [185, 85, 65],
                    backgroundColor: [
                        primaryColor,
                        warningColor,
                        successColor,
                    ],
                    borderColor: [
                        primaryColor,
                        warningColor,
                        successColor,
                    ],
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    'Human Resources',
                    'Manger',
                    'Other'
                ]
            };
            var doughnutPieOptions = {
                cutoutPercentage: 75,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
                maintainAspectRatio: true,
                showScale: true,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                }
            };
            var doughnutChart = new Chart(doughnutChartCanvas, {
                type: 'doughnut',
                data: doughnutPieData,
                options: doughnutPieOptions
            });
        }
        if ($('#usersDoughnutChart').length) {
            var g1
            var g1 = new JustGage({
                id: "usersDoughnutChart",
                value: getRandomInt(0, 100),
                min: 0,
                max: 100,
                gaugeWidthScale: 0.8,
                hideInnerShadow: true,
                customSectors: [{
                    color: dangerColor,
                    lo: 0,
                    hi: 25
                }, {
                    color: warningColor,
                    lo: 25,
                    hi: 50
                }, {
                    color: successColor,
                    lo: 50,
                    hi: 100
                }],
                label: "Daily average"
            });


            setInterval(function () {
                g1.refresh(getRandomInt(20, 100));
            }, 3500);
        }
        if ($('#product-area-chart').length) {
            var lineChartCanvas = $("#product-area-chart").get(0).getContext("2d");
            var data = {
                labels: ["2013", "2014", "2014", "2015", "2016", "2017", "2018"],
                datasets: [{
                        label: 'Support',
                        data: [150, 200, 150, 220, 350, 275, 365],
                        backgroundColor: 'rgba(52,110,240,0.7)',
                        borderColor: 'rgba(52,110,240,0.8)',
                        borderWidth: 2,
                        fill: true
                    },
                    {
                        label: 'Product',
                        data: [300, 400, 300, 440, 700, 550, 730],
                        backgroundColor: 'rgba(0,187,248,0.7)',
                        borderColor: 'rgba(0,187,248,0.8)',
                        borderWidth: 2,
                        fill: true
                    }
                ]
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
                        radius: 3
                    },
                    line: {
                        tension: 0
                    }
                },
                stepsize: 1
            };
            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: data,
                options: options
            });
        }
    });
})(jQuery)