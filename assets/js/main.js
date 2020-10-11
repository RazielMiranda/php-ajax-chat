function ajax() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chat").innerHTML = this.responseText;
            alert("oi");
        }
        request.open("GET", "chat.php", true);
        request.send();
    }
}