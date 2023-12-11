function starter() {
    let allBtn = document.getElementById('all');
    let salesBtn = document.getElementById('sales');
    let supportBtn = document.getElementById('support');
    let assignBtn = document.getElementById('assign');
    let contactBtn = document.getElementById('addContact');

    //add functionality to the add contact button
    contactBtn.addEventListener("click", function(e){
        e.preventDefault();
        //change name to the actual name of the file
        window.location.href= "newContact.php";
    })

    //add event listeners to all filter buttons which calls a displayInfo function

    allBtn.addEventListener("click", function(e) {
        e.preventDefault();
        displayInfo('all');
    });

    salesBtn.addEventListener("click", function(e) {
        e.preventDefault();
        displayInfo('sales');
    });

    supportBtn.addEventListener("click", function(e) {
        e.preventDefault();
        displayInfo('support');
    });

    assignBtn.addEventListener("click", function(e) {
        e.preventDefault();
        displayInfo('assigned_to');
    });

    // Places in the information obtained from the queries inside the results div
    function displayInfo(filter) {
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                var resultsdiv = document.querySelector('.results');
                resultsdiv.innerHTML = this.responseText;
            }
        };

        xhr.open('GET', 'getContacts.php?filter=' + encodeURIComponent(filter), true);
        xhr.send();
    }
}


window.onload = starter;