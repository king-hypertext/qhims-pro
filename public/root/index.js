(() => {
    self.addEventListener('DOMContentLoaded', () => {
        console.log('js loaded');
    })
    $('input[name="dob"], input.datepicker').datepicker({
        dateFormat: "yy-mm-dd",
        maxDate: '+0D',
        changeMonth: true,
        changeYear: true,
        showOtherMonths: true,
    });
    $('input.datepicker, .datepicker').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        showOtherMonths: true,
    });
    $.each($('input[type="tel"], input[type="number"]'), function (index, value) {
        $(value).keypress(function (e) {
            if (isNaN(String.fromCharCode(e.which))) {
                e.preventDefault();
            }
        });
    });
})()