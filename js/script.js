(function () {
'use strict'
const forms = document.querySelectorAll('.dilarikan-javascript')
Array.from(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

$(document).ready(function(){
  // example.php will be used to send the data to the sever database
  $('#example-1').Tabledit({
  url: 'example.php',
  editButton: false,
  deleteButton: false,
  hideIdentifier: true,
  columns: {
  identifier: [0, 'id'],
  editable: [[2, 'first'], [3, 'last'],[3, 'nickname']]
  }
  });
  
  });

  $(window).on("load",function(){
    $(".loader-wrapper").fadeOut("slow");
});