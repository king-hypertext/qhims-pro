(() => {
    self.addEventListener('DOMContentLoaded', () => {
        console.log('js loaded');
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('blur', () => {
                if (input.value == null || input.value == '') {
                    input.classList.remove('active')
                } else if (input.value !== null) {
                    input.classList.add('active')
                }
            })
        })
    })
    $('input[name="dob"]').datepicker({
        dateFormat: "yy-mm-dd",
        maxDate: '+0D',
        changeMonth: true,
        changeYear: true,
        showOtherMonths: true,
    });
    $('.datepicker').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        showOtherMonths: true,
    });
    $('.timepicker').timepicker({
        currentTime: moment(new Date().toTimeString()),
        timeFormat: 'h:mm',
        interval: 30,
    });
    $.each($('input[type="tel"], input[type="number"]'), function (index, value) {
        $(value).keypress(function (e) {
            if (isNaN(String.fromCharCode(e.which))) {
                e.preventDefault();
            }
        });
    });
})()