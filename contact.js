function validateForm() {
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (name === "" || phone === "" || email === "" || message === "") {
        alert("Please fill in all fields.");
        return false; // Prevent form submission
    } else {
        confirm(); // Call the confirmation popup if all fields are filled
        return false; // Prevent actual form submission to allow popup handling
    }
}
function confirm() {
    document.getElementById('popup').style.display = 'block';
}
function popup2() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('popup2').style.display = 'block';
}
function hidepopup() {
    document.getElementById('popup').style.display = 'none';
}
function hidepopup2() {
    document.getElementById('popup2').style.display = 'none';
    location.reload();
}