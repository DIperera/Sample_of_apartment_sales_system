function anim() {
    const move = document.getElementById("mobnav");
    move.classList.toggle("abc");
}
function showPopup() {
    document.getElementById('popup').style.display = 'block';
}

function closePopup() {
    document.getElementById('popup').style.display = 'none';
}

setInterval(function () {
    let now = new Date();
    let seconds = now.getSeconds();

    if (seconds === 30 || seconds === 0) {
        showPopup();
    }
}, 1000);