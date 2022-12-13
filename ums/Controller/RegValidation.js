
function validateGen() {
    var gn = document.getElementsByName("gender");
    var checked = false;
    for (var i = 0; i < gn.length; i++) {
        if (gn[i].checked) {
            checked = true;
            break;
        }
    }
    return checked;
}

function Validation() {
    let name = document.getElementById("firstName").value;
    let username = document.getElementById("userName").value;
    let password = document.getElementById("password").value;
    let CPass = document.getElementById("confirmPassword").value;
    let age = document.getElementById("dob").value;
    let mobile = document.getElementById("phone").value;


    if (name == "") {
        document.getElementById("errorfname").innerHTML = "Name cannot be empty";
        return false;
    }
    else {
        document.getElementById("errorfname").innerHTML = "";
    }

    if (length.name<3) {
        document.getElementById("errorfname").innerHTML = "Name must contain 3 characters";
    }
    else {
        document.getElementById("errorfname").innerHTML = "";
    }

    if (username == "") {
        document.getElementById("errorusername").innerHTML = "Username cannot be empty";
    }
    else {
        document.getElementById("errorusername").innerHTML = "";
    }

    if (length.password < 6) {
        document.getElementById("errorpass").innerHTML = "Password must contain 6 characters";
    }
    else {
        document.getElementById("errorpass").innerHTML = "";
    }

    if (password != CPass) {
        document.getElementById("errorCpass").innerHTML = "Password and Confirm password is not matching";
    }
    else {
        document.getElementById("errorCpass").innerHTML = "";
    }

    if (age == "") {
        document.getElementById("errordob").innerHTML = "Age cannot be empty";
    }
    else {
        document.getElementById("errordob").innerHTML = "";
    }

    if (mobile == "") {
        document.getElementById("errorphone").innerHTML = "Contact Number cannot be empty";
        return false;
    }

    else {
        document.getElementById("errorphone").innerHTML = "";
    }

    if (validateGen() == false) {
        document.getElementById("errorgender").innerHTML = "Gender is requried";
        return false;
    }
    else {
        document.getElementById("errorgender").innerHTML = "";
    }



}