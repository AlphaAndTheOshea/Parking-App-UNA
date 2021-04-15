$(document).ready(function() {
  //Username, Password, Security answer and button saved a vars
  var username = $("input[type=text]");
  var password = $("input[type=password]");
  button = $("button");

  //saves the text in the object as a variable
  var usernameTxt = $("input[type=text]").val();
  var passwordTxt = $("input[type=password]").val();
  //calls the toggle button funct.
  toggleButton();
  //adds events for the username password fields
  username.keypress(toggleButton).keyup(toggleButton);
  password.keypress(toggleButton).keyup(toggleButton);
  //the toggle function determines if there is text
  //in the username password fields and if yes, the sign in button is actived.

  function toggleButton() {
    usrLen = username.val().length;
    pwdLen = password.val().length;

    if (usrLen != 0 && pwdLen != 0) {
        //activatebutton
        button.removeAttr("disabled").addClass("activeButton");
    } else {
      //disabled button
      button.attr("disabled", "disabled");
      button.removeClass("activeButton");
    }
  }

});
