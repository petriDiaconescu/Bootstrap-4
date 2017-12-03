$(document).ready(function(){
  $('#contact_form').on('submit', function(event){
    var name = $('#name').val();
    var nameField = $('#name');
      var nameDiv = nameField.parent();
    if (name.length < 3){
      nameField.addClass('form-control-danger');
      nameDiv.addClass('has-danger')
        .append('<small class="form-text text-muted">Not a valid name</small>');
      
      nameDiv.find('label').addClass('col-form-label');
    } else {
      nameField.addClass('form-control-success');
      nameDiv.addClass('has-success')
        .append('<small class="form-text text-muted">Valid!</small>');
      nameDiv.find('label').addClass('col-form-label');
    }
    
    event.preventDefault();
  });
});