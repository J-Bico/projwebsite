function validate() {
    var name = document.getElementById("user").value;
    if (name == "") {
        alert("Please enter username");
        return false;
    }

    var name = document.getElementById("pass").value;
    if (name == "") {
        alert("Please enter password");
        return false;
    }


}
