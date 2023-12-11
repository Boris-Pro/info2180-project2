
function login() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Perform AJAX request to PHP for login
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);

            if (response.success) {
                alert("Login successful!");
                // Redirect or perform other actions upon successful login
            } else {
                alert("Login failed. Please check your credentials.");
            }
        }
    };

    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("email=" + email + "&password=" + password);
}

window.onload = function () {
    // Attach the login function to the button click event
    var loginButton = document.getElementsByTagName("button")[0];
    if (loginButton) {
        loginButton.addEventListener("click", login);
    }

};
