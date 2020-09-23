(function ($) {
  'use strict';
  $(function () {
    $('#order-listing').DataTable({
      "aLengthMenu": [
        [25, 50, 75, -1],
        [25, 50, 75, "All"]
      ],
      "iDisplayLength": 25,
      "bLengthChange": false,
      "language": {
        search: "Bul :"
      }
    });
    $('#order-listing').each(function () {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Kelime');
      // search_input.removeClass('form-control-sm');
    });
  });
  $(function () {
    var fixedColumnTable = $('#fixed-column').DataTable({
      "aLengthMenu": [
        [25, 50, 75, -1],
        [25, 50, 75, "All"]
      ],
      columnDefs: [{
        orderable: false,
        targets: [1]
      }],
      fixedHeader: {
        header: false,
        footer: true
      },
      scrollY: 300,
      scrollX: true,
      scrollCollapse: true,
      bAutoWidth: false,
      paging: false,
      fixedColumns: true,
      "iDisplayLength": 25,
      "bLengthChange": true,
      "language": {
        search: "Sırala :"
      }
    });
    $('#fixed-column').each(function () {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Kelime');
      // search_input.removeClass('form-control-sm');
      var s = datatable.closest('.dataTables_wrapper').find(".dataTables_filter").append('<button type="button" class="btn btn-primary ml-2">Yeni Kayıt</button>');
    });
    $('#fixed-column_wrapper').resize(function() {
      fixedColumnTable.draw();
    });
  });
})(jQuery);