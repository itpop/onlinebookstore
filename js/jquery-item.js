// jquery-item.js
$('input[type="checkbox"]').change(function(){
    var totalprice = 0.00;
    $('input[type="checkbox"]:checked').each(function(){
        totalprice = totalprice + parseFloat($(this).val());
    });
    $('#price').val(totalprice.toFixed(2));
});