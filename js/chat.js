const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault();
}

sendBtn.onclick = ()=>{
        // Start Ajax
        let xhr = new XMLHttpRequest(); //create XML Object
        xhr.open("POST", "php/insert-chat.php", true);
        xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                    inputField.value = ""; //insert message and empty input field
                    scrollToBottom();
                }
            }
        }
        // send data ajax to php
        let formData = new FormData(form); //create new form data
        xhr.send(formData); //send data
}


chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}
setInterval(()=>{
    // Start Ajax
    let xhr = new XMLHttpRequest(); //create XML Object
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")){ 
                scrollToBottom();
            }
           }
        }
    }
    let formData = new FormData(form); //create new form data
    xhr.send(formData); //send data
   }, 500) //func will run frequently after 500ms

   function scrollToBottom(){
       chatBox.scrollTop = chatBox.scrollHeight;
   }