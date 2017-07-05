$( document ).ready(function() {

$('form').submit(function(e){
  e.preventDefault();
  $('.panel-default').removeClass('animated shake');
  $('.alert').remove();
  var submit = true;
  var btn = $(this).find('input[type="submit"]');
  if($(this).find('input[type="text"]').val() == "" || $(this).find('input[type="password"]').val() == ""){
    $('.panel-default .panel-body').prepend('<div class="alert alert-danger">Please enter username & password.</div>');
    submit = false;
    $('.panel-default').addClass('animated shake');
  }
  if(submit == true){
    btn.button('loading');
    $.post('index.php',$(this).serialize(),function(data){
      if(data.error == 1){
        $('.panel-default .panel-body').prepend('<div class="alert alert-danger">Invalid username or password.</div>');
        $('.panel-default').addClass('animated shake');
      }else{
        $('.panel-default .panel-body').prepend('<div class="alert alert-success">Login successfull, redirecting...</div>');
        window.location = 'site1.php';
      }
    },"JSON").error(function(){
      alert('Request not complete.');
    }).always(function(){
      btn.button('reset')
    });
  }
  setTimeout(function(){

  },100)

});

});
