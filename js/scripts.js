$(document).ready(function(){
  $('#contact_form').on('submit', function(event){
    var name = $('#name').val();
    if (name.length < 3){
      var nameField = $('#name');
      var nameDiv = nameField.parent();
      
      nameField.addClass('form-control-danger');
      nameDiv.addClass('has-danger')
        .append('<small class="form-text text-muted">Not a valid name</small>');
      
      nameDiv.find('label').addClass('col-form-label');
    } 
    
    event.preventDefault();
  });
});