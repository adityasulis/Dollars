const form = document.querySelector(".login form"),
registerBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault();
}

registerBtn.onclick = ()=>{
    // Start Ajax
    let xhr = new XMLHttpRequest(); //create XML Object
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            console.log(data);
                if(data == "success"){
                    location.href = "users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }
    // send data ajax to php
    let formData = new FormData(form); //create new form data
    xhr.send(formData); //send data
}