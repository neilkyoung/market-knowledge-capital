var Homepage = (function( $ ){
  var submitButton = ".email-form--submit",
      inputField = ".email-form--input",
      alertDisplay = ".alert",
      success = { class: "alert-success", message: '<p>Thank you. We will keep you updated</p>' },
      error = { class: "alert-danger", message: '<p>There was a problem sending your email</p>' },
      emptyError = { class: "alert-danger", message: '<p>Please enter a valid email address</p>' };

  var init = function( ){
    attachHandlers();
    $(alertDisplay).hide();
  };

  var attachHandlers = function(){
    $( submitButton ).bind('click', function(){
      var email = $( inputField ).val();
      sendEmailAddress( email );
    });
  };

  var sendEmailAddress = function( email ){
    $( alertDisplay ).hide();
    if ( $.trim( email ) == ''){
      $( alertDisplay ).html( emptyError.message ).removeClass( success.class ).removeClass( error.class ).addClass( emptyError.class ).show();
    }
    else{
      var data = { email: email };
      $.ajax({
        url: '/ajax.php',
        method: 'POST',
        dataType: 'json',
        data: data,
        success: function( data ) {
          if (data.success){
            displayResponse( false );
            $(inputField).val('');
          }
          else{
            displayResponse( true );
          }
        },
        error: function(xhr, status, error) {
          displayResponse( true );
        }
      });
    }
  };

  var displayResponse = function( error ){
    if ( error ){
      $( alertDisplay ).html( error.message ).removeClass( success.class ).addClass( error.class ).show();
    }
    else {
      $( alertDisplay ).html( success.message ).removeClass( error.class ).addClass( success.class ).show();
    }
  };

  return {
    init: init
  };
})( jQuery );


$( document ).ready(function(){
  //alert('here');
  Homepage.init();
});
