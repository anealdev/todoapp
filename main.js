$(document).on("submit", ("form"), function(event){
  event.preventDefault();

  //underscore indicates private method
  var _form = $(this);

  var _error = $(".js-error", _form);
  var form_content = {
    task: $("input[type='text']", _form).val()
  };

  _error.hide();
  $.ajax({
    type: 'POST',
    url:'todo.php',
    data: form_content,
    dataType: 'json',
    async: true,
  })
  .done(function ajaxDone(data){
    console.log("task submitted");
  })
  .fail(function ajaxFailed(e){
    alert("Fail");
    console.log(e);
  })
  return false; // makes it stay on same page
});
