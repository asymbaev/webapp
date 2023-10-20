function send() {
    var input = document.getElementById("input").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            var chatlog = document.getElementById("chatlog");
            var message = document.createElement("div");
            message.innerHTML = "<b>You:</b> " + input + "<br><b>Foodbot:</b> " + response;
            chatlog.appendChild(message);
            document.getElementById("input").value = "";
        }
    };
    xmlhttp.open("GET", "foodbot.php?input=" + input, true);
    xmlhttp.send();
}
