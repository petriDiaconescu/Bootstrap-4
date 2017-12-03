$(document).ready(function(){
  $('#contact_form').on('submit', function(event){
    var name = $('#name').val();
    if (name.length < 4){
      $('#name').parent().addClass('has-danger from-control-danger');
      $('#name').parent().find('label').addClass('col-form-label');
      $('#name').parent().append('<small class="form-text text-muted">Not a valid name</small>');
    }
    event.preventDefault();
  });
});