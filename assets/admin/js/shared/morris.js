$(function () {
  'use strict';
  if ($('#morris-line-example').length) {
    Morris.Line({
      element: 'morris-line-example',
      lineColors: [ChartColor[0], ChartColor[1], ChartColor[2], ChartColor[3]],
      data: [{
          y: '2006',
          a: 100,
          b: 150
        },
        {
          y: '2007',
          a: 75,
          b: 65
        },
        {
          y: '2008',
          a: 50,
          b: 40
        },
        {
          y: '2009',
          a: 75,
          b: 65
        },
        {
          y: '2010',
          a: 50,
          b: 40
        },
        {
          y: '2011',
          a: 75,
          b: 65
        },
        {
          y: '2012',
          a: 100,
          b: 90
        }
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B']
    });
  }
  if ($('#morris-area-example').length) {
    Morris.Area({
      element: 'morris-area-example',
      lineColors: [ChartColor[0], ChartColor[1], ChartColor[2], ChartColor[3]],
      data: [{
          y: '2006',
          a: 100,
          b: 90
        },
        {
          y: '2007',
          a: 75,
          b: 105
        },
        {
          y: '2008',
          a: 50,
          b: 40
        },
        {
          y: '2009',
          a: 75,
          b: 65
        },
        {
          y: '2010',
          a: 50,
          b: 40
        },
        {
          y: '2011',
          a: 75,
          b: 65
        },
        {
          y: '2012',
          a: 100,
          b: 90
        }
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B']
    });
  }
  if ($("#morris-bar-example").length) {
    Morris.Bar({
      element: 'morris-bar-example',
      barColors: [ChartColor[0], ChartColor[1], ChartColor[2], ChartColor[3]],
      data: [{
          y: '2006',
          a: 100,
          b: 90
        },
        {
          y: '2007',
          a: 75,
          b: 65
        },
        {
          y: '2008',
          a: 50,
          b: 40
        },
        {
          y: '2009',
          a: 75,
          b: 65
        },
        {
          y: '2010',
          a: 50,
          b: 40
        },
        {
          y: '2011',
          a: 75,
          b: 65
        },
        {
          y: '2012',
          a: 100,
          b: 90
        }
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B']
    });
  }
  if ($("#morris-donut-example").length) {
    Morris.Donut({
      element: 'morris-donut-example',
      colors: [ChartColor[0], ChartColor[1], ChartColor[2], ChartColor[3]],
      data: [{
          label: "Download Sales",
          value: 12
        },
        {
          label: "In-Store Sales",
          value: 30
        },
        {
          label: "Mail-Order Sales",
          value: 20
        }
      ]
    });
  }
});