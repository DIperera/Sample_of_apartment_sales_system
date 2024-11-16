const form = document.getElementById("login");
const div1 = document.getElementById("div1")
function validate(event){
    
    if(!isvalidated()){
        event.preventDefault();
    }
}
function isvalidated(){
    const namepattern = /^[a-zA-Z\s]+$/;
    let message = [];
    if(!namepattern.test(form.name.value.trim())){
        message.push("Please enter a valid name");
    }
    div1.innerHTML = message.join(",");
    if(message.length===0){
        return true;
    }
}