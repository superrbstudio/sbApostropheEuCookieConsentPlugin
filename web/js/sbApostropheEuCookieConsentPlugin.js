function sbEuCookieConsentSetup() {
  
  // function to read cookies via javascript
  function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
  }
  
  // listen for authorise click
  $('#sbEuCookieConsentBoxClear').click(function() {
    
    $.ajax({
      type: 'POST',
      url: $(this).attr('href'),
      data: { 'noRedirect': true },
      success: function() {
        $('#sbEuCookieConsentBox').fadeOut();
      }
    });
    
    return false;
  });
  
  // check if a cookie exists, if it doesnt display the message
  var sbEuCookieNomNom = readCookie('sb-eu-cookie-nom-nom');
  if(sbEuCookieNomNom == null) { $('#sbEuCookieConsentBox').fadeIn(); }
}


