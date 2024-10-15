
//==========================================================
//  Time and Date Pickers
//==========================================================

$(function() {
   /*  $('.timepicker').timepicker(); */

    $('.datepicker').datepicker({
        autoclose: true,
        todayBtn: "linked"
    });
});


//==========================================================
//  Tooltips icon
//==========================================================

$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})

//==========================================================
//  Alert hide time set
//==========================================================

setTimeout(function() {
    $(".alert").fadeOut("slow", function() {
        $(".alert").remove();
    });

}, 6000);

//==========================================================
//  Select All Checkbox
//==========================================================

$(function() {

    $('#parent_present').on('change', function() {
        $('.child_present').prop('checked', $(this).prop('checked'));
    });
    $('.child_present').on('change', function() {
        $('#parent_present').prop($('.child_present:checked').length ? true : false);
    });
    $('#parent_absent').on('change', function() {
        $('.child_absent').prop('checked', $(this).prop('checked'));
    });
    $('.child_absent').on('change', function() {
        $('#parent_absent').prop($('.child_absent:checked').length ? true : false);
    });
});