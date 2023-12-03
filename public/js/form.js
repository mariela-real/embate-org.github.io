
  var input = document.querySelector("#phone");
  var iti = window.intlTelInput(input, {
      separateDialCode: true,
      utilsScript: "/js/utils.js"
  });
  

  document.addEventListener('input', function (e) {
    if (e.target && e.target.classList.contains('form-control')) {
      const input = e.target;
      const label = input.nextElementSibling;
  
      if (input.value) {
        label.classList.add('label-floated');
      } else {
        label.classList.remove('label-floated');
      }
    }
  });