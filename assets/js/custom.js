var arr = [];
$('#ketqua tr').each(function() {
    //var mahocphan = $(this).find("td[data-target=mahocphan]").html();
    arr.push($(this).find("td[data-target=mahocphan]").html());
});

$('#input input').change(function() {
    if ($('#input input').is(':checked') == true) {
        $('#input input').prop('disabled', true);
        $(this).prop('disabled', false);
    } else {
        $('#input input').prop('disabled', false);
        $('#input input.check').attr("disabled", true);
    }
});

$.each(arr, function(index, value) {
    $('#ddReferences tr').each(function() {
        var mahocphan1 = $(this).find("td[data-target=mahocphan]").html();
        var soluong = $(this).find("td[data-target=soluong]").html();
        var dadangky = $(this).find("td[data-target=dadangky]").html();
        var input = $(this).find("#input input");
        //document.write(dadangky);
        if (arr[index] == mahocphan1) {
            input.attr('disabled', 'disabled');
            $(this).css('color', '#ccc');
            input.addClass("check");
        }
        if (soluong == dadangky) {
            input.attr('disabled', 'disabled');
            $(this).css('background', '#ef9a9a');
            input.addClass("check");
        }
    });
});
