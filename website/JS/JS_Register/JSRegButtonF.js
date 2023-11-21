function input_rules() {
    var user_input = document.getElementById("user_pseud").value;
    var mail_input = document.getElementById("mail").value;

    if( user_input == "Formget" && mail_input == "formget#123") {
        alert ("Login successfully");
        window.location = "success.html";
        return false;
    } else {
        attempt --;// Decrementing by one.
        alert("You have left "+ attempt +" attempt;");
        // Disabling fields after 3 attempts.
        if( attempt == 0){
            document.getElementById("username").disabled = true;
            document.getElementById("password").disabled = true;
            document.getElementById("submit").disabled = true;
            return false;
        }
    }
}