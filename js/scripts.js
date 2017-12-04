$(document).ready(function(){
  $('#contact_form').on('submit', function(event){
    event.preventDefault();
    
    var errors = [];
    // Validating the name input field
    var name = $('#name').val();
    var nameField = $('#name');
    var nameDiv = nameField.parent();
    
    if (name.length < 3){
      nameField.addClass('form-control-danger');
      nameDiv.addClass('has-danger')
        .find('small').html('Error!');
      
      nameDiv.find('label').addClass('col-form-label');
      errors.push("1");
    } else {
      nameField.addClass('form-control-success').removeClass('form-control-danger');
      nameDiv.addClass('has-success').removeClass('has-danger')
        .find('small').html('Valid!');
      nameDiv.find('label').addClass('col-form-label');
    }
    
    // Validating the email input field
    
    var email = $('#email').val();
    var emailField = $('#email');
     var emailDiv = emailField.parent();
    if (email.length < 3){
      emailField.addClass('form-control-danger');
      emailDiv.addClass('has-danger')
        .find('small').html('Error!');
      
      emailDiv.find('label').addClass('col-form-label');
      errors.push("2");
    } else {
      emailField.addClass('form-control-success').removeClass('form-control-danger');
      emailDiv.addClass('has-success').removeClass('has-danger')
        .find('small').html('Valid!');
      emailDiv.find('label').addClass('col-form-label');
    }
    
    // Validating the message input field
    var message = $('#message').val();
    var messageField = $('#message');
    var messageDiv = messageField.parent();
    if (message.length < 3){
      messageField.addClass('form-control-danger');
      messageDiv.addClass('has-danger')
        .find('small').html('Error!');
      
      messageDiv.find('label').addClass('col-form-label');
      errors.push("3");
    } else {
      messageField.addClass('form-control-success').removeClass('form-control-danger');
      messageDiv.addClass('has-success').removeClass('has-danger')
        .find('small').html('Valid!');
      messageDiv.find('label').addClass('col-form-label');
    }
    
    var contact_form = $('#contact_form');
    if(!errors.length > 0){
      $.ajax({
        type: contact_form.attr('method'),
        url: contact_form.attr('action'),
        data: contact_form.serialize()
      })
      .done(function(data){
        console.log(data);
      });
    } 
    
  });
});