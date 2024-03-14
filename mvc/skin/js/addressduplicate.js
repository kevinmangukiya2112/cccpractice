$(document).ready(function() {
    $('#copyButton').click(function() {
      var addressValue = $('#baddress').val();
      var cityValue = $('#bcity').val();
      var countryValue = $('#bcountry').val();
      var regionValue = $('#bregion').val();
      var phoneValue = $('#bphone').val();

      $('#saddress').val(addressValue);
      $('#scity').val(cityValue);
      $('#scountry').val(countryValue);
      $('#sregion').val(regionValue);
      $('#sphone').val(phoneValue);
    });
});