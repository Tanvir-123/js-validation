let pname = document.getElementById('name');
let nameerr = document.getElementById('validatename');
let email = document.getElementById('email');
let emailerr = document.getElementById('validateemail');
let phone = document.getElementById('phone');
let phoneerr = document.getElementById('validatephone');
let password = document.getElementById('password');
let passworderr = document.getElementById('passvalidate');
let c_password = document.getElementById('c-password');
let c_passworderr = document.getElementById('cpassvalidate');
let address = document.getElementById('address');
let addresserr = document.getElementById('validateaddress');

let submit = document.getElementById('submit');
let reset = document.getElementById('reset');

let dob = document.getElementById('dob');

pname.addEventListener('keyup', funname);
email.addEventListener('keyup', funemail);
phone.addEventListener('keyup', funphone);
password.addEventListener('keyup', funpassword);
c_password.addEventListener('keyup', func_password);
address.addEventListener('keyup', funaddress);

function funname(e) {
    if (pname.value.length < 1) {
        nameerr.innerHTML = "Cann't be Empty!";
        nameerr.style.color = "red";
    }
    else {
        nameerr.innerHTML = "";
    }
}

function funemail(e) {
    if (email.value.length < 1) {
        emailerr.innerHTML = "Cann't be Empty!";
        emailerr.style.color = "red";
    }
    else {
        emailerr.innerHTML = "";
    }
}

function funphone(e) {
    if (phone.value.length < 1) {
        phoneerr.innerHTML = "Cann't be Empty!";
        phoneerr.style.color = "red";
    }
    else {
        phoneerr.innerHTML = "";
    }
}

function funpassword(e) {
    if (password.value.length < 6) {
        passworderr.innerHTML = "Password Must be at least 6 character!";
        passworderr.style.color = "red";
    }
    else {
        passworderr.innerHTML = "";
    }
}

function func_password(e) {
    if (password.value != c_password.value) {
        c_passworderr.innerHTML = "Password doesn't match!";
        c_passworderr.style.color = "red";
    }
    else {
        c_passworderr.innerHTML = "";
    }
}

function funaddress(e) {
    if (address.value.length < 1) {
        addresserr.innerHTML = "Cann't be Empty!";
        addresserr.style.color = "red";
    }
    else {
        addresserr.innerHTML = "";
    }
}

