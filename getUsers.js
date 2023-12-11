function starter(){
    let url = 'userList.php'

    var request = new XMLHttpRequest();

    request.onreadystatechange =function(){
        if (request.readyState == XMLHttpRequest.DONE){
            if(request.status == 200){
                var resultdiv = document.getElementsByClassName("userTable");
                resultdiv.innerHTML = request.responseText;
            }
            else {
                alert("An Error Has Occurred.")
            }
        }
    };
    
    request.open("GET",url,true);
    request.send();
}

window.onload = starter;

