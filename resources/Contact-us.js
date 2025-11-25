function validateForm(){
    let firstName = document.getElementById("first-name").value();
    let lastName = document.getElementById("last-name").value();
    let email = document.getElementById("email").value();
    let confirmEmail = document.getElementById("confirm-email").value();

if(firstName ==="" || lastName ==="" || email ==="" || confirmEmail ===""){
    errors("The fields must be filled");
}
}
let email = document.getElementById("email");
let confirmEmail = document.getElementById("confirm-email");
document.getElementById("email").onchange = checkEmails;
document.getElementById("confirm-email").onchange = checkEmails;

function checkEmails() {
 let email = document.getElementById("email");
  let confirmEmail = document.getElementById("confirm-email");

    if (email.value === confirmEmail.value) {
        confirmEmail.setCustomValidity("");
    } else {
        confirmEmail.setCustomValidity("Emails must match.");
    }
}
document.getElementById("Contact-submission").addEventListener("submit", function(event) {
    alert("Your message has successfully been sent to us!");
});
