$(document).ready(function() {
  $('#contact-form').on('submit', 
    function(event) {
      event.preventDefault();

      var submit          = $('#contact-form #csubmit');
      var ajaxResponse    = $('#contact-response');

      var name            = $("input#cname").val();
      var email           = $("input#cemail").val();
      var message         = $("textarea#cmessage").val();

      $.ajax({
        type: 'POST',
        url: 'assets/php/contact.php',
        dataType: 'json',
        data: {
          name: name,
          email: email,
          message: message,
        },
        cache: false,
        beforeSend: function(result) {
          submit.empty();
          submit.attr('disabled', true);
          submit.append('<i class="fa fa-cog fa-spin"></i> Just a sec...');
        },
        success: function(result) {
          if(result.sendstatus === 1) {
            $('#contact-form').fadeOut(500, function(){
              ajaxResponse.html(result.message);
            });
          } else {
            ajaxResponse.html(result.message);
          }
        }
      });

      return false;
    }
  );
});