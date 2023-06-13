$(document).ready(function () {
    let number = parseInt($("input[name=order_qty]").val());

    $(".increment").click(function () {
        let number = parseInt($($(this).siblings('.order_qty')).val());
        number++;
        $(this).siblings('.order_qty').val(number);
    });
    $(".decrement").click(function () {
        let number = parseInt($($(this).siblings('.order_qty')).val());
        if (number != 1) {

            number--;
        }
        $(this).siblings('.order_qty').val(number);
    });



});

$(document).ready(function () {
    let number = parseInt($("input[name=order_qty]").val());

    $("#increment").click(function () {
        number++;
        $("input[name=order_qty]").val(number);
    });

    $("#decrement").click(function () {
        if (number > 1) {
            number--;
            $("input[name=order_qty]").val(number);
        }
    });
});