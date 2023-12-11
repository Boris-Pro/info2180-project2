document.addEventListener('DOMContentLoaded', function () {
    var addUserButton = document.getElementById('addcontact');

    addUserButton.addEventListener('click', function () {
        window.location.href = 'newUser.php';
    });


});

// Function to make an AJAX request using XMLHttpRequest
function makeRequest(url, method, callback) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                callback(xhr.responseText);
            } else {
                console.error('Error loading users. Status:', xhr.status);
            }
        }
    };
    xhr.open(method, url, true);
    xhr.send();
}

// Function to handle the response and update the 'result' div
function handleResponse(response) {
    var resultDiv = document.getElementById('result');
    resultDiv.innerHTML = response;
}

// Make an AJAX request when the page loads
document.addEventListener('DOMContentLoaded', function() {
    makeRequest('dashboardhandler.php', 'GET', handleResponse);
});
