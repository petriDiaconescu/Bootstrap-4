$(document).ready(function(){
  $('#contact_form').on('submit', function(event){
    var name = $('#name').val();
    var nameField = $('#name');
    var nameDiv = nameField.parent();
    if (name.length < 3){
      nameField.addClass('form-control-danger');
      nameDiv.addClass('has-danger')
        .find('small').html('Error!');
      
      nameDiv.find('label').addClass('col-form-label');
    } else {
      nameField.addClass('form-control-success').removeClass('form-control-danger');
      nameDiv.addClass('has-success').removeClass('has-danger')
        .find('small').html('Valid!');
      nameDiv.find('label').addClass('col-form-label');
      console.log('I here');
    }
    
    
    event.preventDefault();
  });
});