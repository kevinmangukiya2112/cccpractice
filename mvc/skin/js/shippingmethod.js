

$(document).ready(function(){
    $('#cnumber').hide();
    $('#cnumber').hide();
    var creditcard = $('#creditcard').val();
    var debitcard = $('#debitcard').val();
    $(paymentMethod).change(function(){
        var findChecked = $('#paymentMethod').find(':checked').val();

        if(findChecked == creditcard || findChecked == debitcard){
            $('#cnumber').show();
        }
        else{
            $('#cnumber').hide();
        }
    })
    // var payment =  $('#paymentMethod').find(':checked').val();
});

