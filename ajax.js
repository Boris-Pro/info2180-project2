

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("loadContactButton").addEventListener("click", function () {
        var contactId = document.getElementById("contactId").value;

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Set up the request
        xhr.open("POST", "viewFullContact", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        // Set up the callback function
        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                document.getElementById("result").innerHTML = xhr.responseText;
            } else {
                console.error("Request failed with status:", xhr.status);
            }
        };

        // Handle network errors
        xhr.onerror = function () {
            console.error("Network error occurred");
        };

        // Send the request with the contactId parameter
        xhr.send("id=" + contactId);
    });
});
