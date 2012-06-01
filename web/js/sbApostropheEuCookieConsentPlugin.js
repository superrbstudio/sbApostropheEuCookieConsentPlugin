function sbEuCookieConsentSetup() {
  
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
  })
}


