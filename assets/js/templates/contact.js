document.addEventListener("DOMContentLoaded", function() {
  let formName = document.getElementById('name');
  let formSubject = document.getElementById('subject');
  let sendButton = document.getElementById('send');

  
  console.log(formName, formSubject);

  function updateSubject() {
    let newSubject = `${formSubject.value} from: ${formName.value}`;

    console.log(newSubject);
    formSubject.value = newSubject;
    console.log(formSubject);
  }

  const form = document.getElementById('contact');
  sendButton.onclick = function(e) {
    e.preventDefault(); 
    updateSubject();
    console.log(form);
    form.submit(); 
  }
})