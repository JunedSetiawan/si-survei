$(document).ready(function () {
  var fromDate = '';
  var toDate = '';
  var action = 'fetch_data';

  // filter_data();

  function filter_data() {
    var pendidikan = get_filter('pendidikan');
    var pekerjaan = get_filter('pekerjaan');
    var gender = get_filter('gender');
    var soal1 = get_filter('soal1');
    var soal2 = get_filter('soal2');
    var soal3 = get_filter('soal3');
    var soal4 = get_filter('soal4');
    var soal5 = get_filter('soal5');
    var soal6 = get_filter('soal6');

    $.ajax({
      url: 'fetch_data.php',
      method: 'POST',
      data: { action: action, pendidikan: pendidikan, pekerjaan: pekerjaan, gender: gender, soal1: soal1, soal2: soal2, soal3: soal3, soal4: soal4, soal5: soal5, soal6: soal6, fromDate: fromDate, toDate: toDate },
      success: function (data) {
        $('tbody').html(data);
      },
    });
  }

  $('input[name="daterange"]').on('apply.daterangepicker', function (ev, picker) {
    $(this).val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD'));
    fromDate = picker.startDate.format('YYYY-MM-DD');
    toDate = picker.endDate.format('YYYY-MM-DD');
    console.log(fromDate + ' sampai ' + toDate);
    filter_data();
  });

  $('input[name="daterange"]').on('cancel.daterangepicker', function (ev, picker) {
    $(this).val('');
  });

  $('input[name="daterange"]').daterangepicker(
    {
      opens: 'center',
      autoUpdateInput: false,
    },

    // From to To date range function
    function (start, end) {
      var fromDate = start.format('YYYY-MM-DD');
      var toDate = end.format('YYYY-MM-DD');
      //   if(fromDate !== "" && toDate !== "") {
      //     filter_data();
      //   }
    }
  );

  function get_filter(class_name) {
    var filter = [];
    $('.' + class_name + ':checked').each(function () {
      filter.push($(this).val());
    });
    return filter;
  }

  $('.common_selector').click(function () {
    filter_data();
  });
});

$(document).ready(function () {
  var table = $('#example1').DataTable({
    paging: true,
    lengthChange: false,
    buttons: ['print', 'excel', 'pdf'],
    dom: 'Bftip',
  });
});

$(function () {
  //Initialize Select2 Elements
  $('.select2').select2();

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4',
  });
});
