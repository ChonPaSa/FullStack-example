function sendForm(){
    $.ajax({
        type: "POST",
        url: "formSubmit.php",
        data: jQuery("#form").serialize(),
        cache: false,
        async: false 
    });
}  

function openModal() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var fieldsArr = JSON.parse(this.responseText);
            var container = document.getElementById("fields");
            for (i = 0 ; i < fieldsArr.length ; i++){
                container.appendChild(document.createTextNode(fieldsArr[i].label));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = fieldsArr[i].name;
                container.appendChild(input);
                // Append a line break 
                container.appendChild(document.createElement("br"));
            }
        }
    };
    document.getElementById('contact').style.display = 'block'; //Show Modal
    xmlhttp.open("GET", "formfields.php", true);
    xmlhttp.send(); 
}

function checkCookies() {
    $( document ).ready(function() {
        if (document.cookie.indexOf('visited=true') == -1){
            // load the overlay
            //$('#myModal').modal({show:true});
            openModal();    
            var year = 1000 * 60 * 60 * 24 * 365;
            var expires = new Date((new Date()).valueOf() + year);
            document.cookie = "visited=true;expires=" + expires.toUTCString();
            
        }
    }); 
}
    