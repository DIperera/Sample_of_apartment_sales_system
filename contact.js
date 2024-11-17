function validateForm(event) {
    event.preventDefault();
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;
    var error = document.getElementById('error');

    const namepattern = /^[a-zA-Z\s]+$/;
    const nopattern = /^[0-9]+$/;
    var msg = [];
    if (name === "" || phone === "" || email === "" || message === ""  ) {
        msg.push("Please fill in all fields.");
     // Prevent form submission
    }else if(!namepattern.test(name)){
      msg.push("Name is not valid");
    }else if(!nopattern.test(phone)){
        msg.push("Number is not valid");
    }
    if (msg.length > 0){
        error.innerHTML = msg.join(",");
    }else{
        error.innerHTML = ""; // Clear previous errors
        confirm(); // Call the confirmation popup if all fields are filled
    }
}
function confirm() {
    document.getElementById('popup1').style.display = 'block';
}
function popup2() {
    document.getElementById('popup1').style.display = 'none';
    document.getElementById('popup2').style.display = 'block';
}
function hidepopup() {
    document.getElementById('popup1').style.display = 'none';
}
function hidepopup2() {
    document.getElementById('popup2').style.display = 'none';
    location.reload();
}