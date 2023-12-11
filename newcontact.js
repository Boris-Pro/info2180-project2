 function starter() {
    var newcontactform = document.querySelector('#newcontactform');

    newcontactform.addEventListener('submit', function (element) {
      console.log('form submitted');
      var validationFailed = false;

      var firstname = document.querySelector("#firstName").value.replace(/(<([^>]+)>)/gi, "").trim();
      var lastname = document.querySelector("#lastName").value.replace(/(<([^>]+)>)/gi, "").trim();
      var company = document.querySelector("#company").value.replace(/(<([^>]+)>)/gi, "").trim();
      var email = document.querySelector("#email").value.replace(/(<([^>]+)>)/gi, "").trim();
      var tel = document.querySelector("#tel").value.replace(/(<([^>]+)>)/gi, "").trim();
      var type = document.getElementById("#typeSelector").value.replace(/(<([^>]+)>)/gi, "").trim();
      var title = document.getElementById("#titleSelector").value.replace(/(<([^>]+)>)/gi, "").trim();     
      var assignedTo = document.getElementById("#assignedSelector").value.replace(/(<([^>]+)>)/gi, "").trim();


      clearErrors();
      if (isEmpty(firstname)) {
        validationFailed = true;
        displayErrorMessage(firstname, "You must fill in your First Name");
      };
      if (isEmpty(title)) {
        validationFailed = true;
        displayErrorMessage(title, "You must select contact title");
      };
  
      if (isEmpty(lastname)) {
        validationFailed = true;
        displayErrorMessage(lastname, "You must fill in your Last Name");
      };
  
      if (!isValidTelephoneNumber(tel)) {
        validationFailed = true;
    
        displayErrorMessage(telephone, "Incorrect format for telephone number.");
      };
  
      if (!isValidEmail(email)) {
        validationFailed = true;
        displayErrorMessage(email, "Incorrect format for email address.");
      };
      if (isEmpty(type)) {
        validationFailed = true;
        displayErrorMessage(type, "You must select a contact type");
      };
  
      if (!isValidUrl(company)) {
        validationFailed = true;
        displayErrorMessage(company, "All contact should have a company");
      };
      if (validationFailed) {
        console.log('Please fix issues in Form submission and try again.');
        element.preventDefault();
      }
      if (isEmpty(assignedTo)) {
        validationFailed = true;
        displayErrorMessage(assignedTo, "You assign contact to a user");
      }
      alert('Form Submitted Successfully');
    });
};
function isEmpty(elementValue) {
    if (elementValue.length == 0) {
      console.log('field is empty');
      return true;
    }
  
    return false;
  }
  
  
  //Check if a valid telephone number was entered.
  function isValidTelephoneNumber(telephoneNumber) {
    return /^\d{3}-\d{3}-\d{4}$/.test(telephoneNumber);
  }
  
  
   //Check if a valid email address was entered.
 
  function isValidEmail(emailAddress) {
    return /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/.test(emailAddress);
  }
  
  function isValidUrl(websiteAddress) {
    return /^(?:(?:https?|ftp):\/\/)(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/[^\s]*)?$/i.test(websiteAddress);
  }
  function insertAfter(element, newNode) {
    element.parentNode.insertBefore(newNode, this.nextSibling);
  }
  /*function clearErrors() {
    var elementsWithErrors = document.querySelectorAll('.error');
    //console.log(elementsWithErrors);
    for (var x = 0; x < elementsWithErrors.length; x++) {
      elementsWithErrors[x].setAttribute('class', '');
      elementsWithErrors[x].parentNode.removeChild(elementsWithErrors[x].nextElementSibling);
      
    }
  
  }*/
  
  /**
   * Display error message next to field.
   */
  function displayErrorMessage(formField, message) {
    formField.setAttribute('class', 'error');
    var errorMessageText = document.createTextNode(message);
    var errorMessage = document.createElement('span');
    errorMessage.setAttribute('class', 'error-message');
    errorMessage.appendChild(errorMessageText);
    //formField.insertAfter(errorMessage);
    insertAfter(formField, errorMessage);
  }
  
Window.onload= starter();