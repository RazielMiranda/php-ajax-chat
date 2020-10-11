function getChat() {
    var getChat = new XMLHttpRequest();
    getChat.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chat").innerHTML = this.responseText;
        }
    };
    getChat.open("GET", "chat.php", true);
    getChat.send();
}