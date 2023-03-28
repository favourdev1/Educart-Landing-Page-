const personal_account_button = document.getElementById("personal-account-btn")

const institution_account_button = document.getElementById("institution-account-btn")

personal_account_button.addEventListener("click", function(){
 window.location="personal/signup.php"
})


institution_account_button.addEventListener("click", function(){
 window.location="institution/signup.php"
})