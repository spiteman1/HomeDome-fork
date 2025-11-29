<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomeDome – Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script defer="" src="Contact-us.js"></script>
    <link rel="icon" href="HomeDome.jpg" type="image/x-icon">
        <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "EU4C10z7pKbVAnulR",
      });
   })();
</script>
    <style>
:root {
--hd-orange: #F57C00;       
--hd-orange-brown: #E67E22; 
--hd-dark-red: #B03A2E;      
--hd-black: #000000;
--hd-grey: #333333;
--hd-text-muted: #6b7280; }

* { box-sizing: border-box;
margin: 0;
padding: 0;
font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }

body { min-height: 100vh;
background: #ffffff;
display: block;
margin: 0; }

.page { width: 100%;
height: 100%;
margin: 0;
border: none;
border-radius: 0;
box-shadow: none; }

.top-bar { background: var(--hd-orange);
padding: 12px 24px;
display: flex;
align-items: center;
gap: 16px; }

.top-logo { display: flex;
align-items: center;
gap: 8px; }

.top-logo img { width: 44px;
height: 44px;
border-radius: 8px;
border: 2px solid #ffffff; }

.top-logo-text { font-weight: 800;
font-size: 20px;
color: #ffffff; }

.top-search { flex: 1;
display: flex;
justify-content: center; }

.top-search-input { width: 100%;
max-width: 600px;
border-radius: 999px;
border: none;
padding: 8px 14px;
font-size: 14px; }

.top-search-button { margin-left: 8px;
padding: 8px 16px;
border-radius: 999px;
border: none;
background: var(--hd-dark-red);
color: white;
font-size: 14px;
cursor: pointer; }

.top-icons { display: flex;
gap: 28px;
align-items: center; }

.icon-item { display: flex;
flex-direction: column;
align-items: center;
color: #ffffff;
text-decoration: none;
font-size: 12px;
font-weight: 500;
position: relative;}

.icon-item i { font-size: 20px;
margin-bottom: 4px; }

.icon-item:hover { opacity: 0.8; }

.icon-badge { position: absolute;
top: -4px;
right: -10px;
min-width: 16px;
height: 16px;
padding: 0 4px;
border-radius: 999px;
background: #ffffff;
color: var(--hd-dark-red);
font-size: 10px;
font-weight: 700;
display: flex;
align-items: center;
justify-content: center;
box-shadow: 0 0 4px rgba(0,0,0,0.25); }

.icon-badge-basket { background: #ffffff;
color: #B03A2E; }

.category-bar { background: var(--hd-orange-brown);
color: #ffffff;
font-size: 13px;
padding: 8px 40px;
display: flex;
justify-content: space-between;
align-items: center; }
    
.category-bar a { color: #ffffff;
text-decoration: none;
font-weight: 500;
white-space: nowrap; }

.category-bar a:hover { text-decoration: underline;}

.content { display: flex;
flex-wrap: wrap;
background: #ffffff;
min-height: calc(100vh - 70px); 
align-items: stretch; }
.contact-us {
    display: flex;
    justify-content: space-between;
    padding: 40px;
    gap: 40px;
    font-family: Arial, sans-serif;
}
.description {
    width: 50%;
}

.contactUs-img {
    margin-bottom: 20px;
}

h2 {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 15px;
    color:rgb(0, 0, 0);
}

.description p {
    font-size: 18px;
    margin-bottom: 30px;
    color: rgb(0, 0, 0);
}
.contactUs-box {
    width: 50%;
    background: rgb(255, 140, 0);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

.contact-form label {
    font-size: 14px;
    font-weight: bold;
    display: block;
    margin-top: 15px;
}

.contact-form input{
    width: 100%;
    padding: 12px;
    margin-top: 5px;
    font-size: 15px;
    border-radius: 8px;
    border: 1px solid brown;
    outline: none;
}
.contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-top: 5px;
    font-size: 15px;
    border-radius: 8px;
    border: 1px solid brown;
    outline: none;
}

.contact-form button {
    margin-top: 25px;
    padding: 12px 20px;
    width: 100%;
    font-size: 16px;
    background-color:brown;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}
    </style>
</head>
<body>
<div class="page">

    <header class="top-bar">
        <div class="top-logo">
            <img src="HomeDome.jpg" alt="HomeDome logo">
            <span class="top-logo-text">HomeDome</span>
        </div>

        <div class="top-search">
            <input class="top-search-input" type="text" placeholder="Search products...">
            <button class="top-search-button">Search</button>
        </div>

        <div class="top-icons">
            <a href="/login" class="icon-item">
                <i class="fa-solid fa-user"></i>
                <span>Account</span>
            </a>
            <a href="/cart" class="icon-item">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Basket</span>
               <!-- <span class="icon-badge basket">{{ $cartCount ?? 0 }}</span> -->
            </a>
        </div>

    </header>
    
    <div class="category-bar">
        <a href="/furniture">Furniture</a>
        <a href="/appliances">Appliances</a>
        <a href="/home-decor">Home Decor</a>
        <a href="/kitchen-ware">Kitchen Ware</a>
        <a href="/lighting">Lighting</a>
    </div>
</div>
    </header>
       <div class="contact-us">
    <div class="description">

        <h2>Contact Us</h2>
        
        <p>
            <strong>We understand you may have questions you want to ask us,
           just fill out the form and we'll get back to you!</strong>
        </p>
                <img src="ChatGPT Image Nov 24, 2025, 08_26_04 PM.png" width="500" height="300" class="contactUs-img ">

    </div>
    <div class="contactUs-box">
        <form id="Contact-submission" class="contact-form">

            <label>Your First Name</label>
            <input type="text" id="first-name" placeholder="First Name" required>

            <label>Your Last Name</label>
            <input type="text" id="last-name" placeholder="Last Name" required>

            <label>Email</label>
            <input type="email" id="email" placeholder="Email" required>

            <label>Confirm Email</label>
            <input type="email" id="confirm-email" placeholder="Confirm Email" required>

            <label>Your Message</label>
            <textarea id="Message" rows="5"></textarea>

            <button type="submit"><strong>Send Message</strong></button>
        </form>
    </div>
        </body>
        </html>
<?php
?>
<script>
function validateForm(){
    let firstName = document.getElementById("first-name").value;
    let lastName = document.getElementById("last-name").value;
    let email = document.getElementById("email").value;
    let confirmEmail = document.getElementById("confirm-email").value;
    let Subject = document.getElementById("Subject").value();

    if(firstName === "" || lastName === "" || email === "" || confirmEmail === "" || Subject == ""){
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
    event.preventDefault();
    sendMail();
});
</script>
