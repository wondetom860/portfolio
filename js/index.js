var erro_message = "";
function validateEmail(email){
    if(email.includes('@')){
        erro_message += " Email valid ";
        return true;
    }else{
        erro_message += " Email does not contain '@' symbol";
        return false;
    }
}

function validateMessgae(message){
    console.log(message,message.length);
    if(!(message == '' || message == undefined || message == ' ')){
        if(message.length >= 8){
            erro_message += " Message valid ";
            return true;
        }else{
            erro_message += " Message length less than 8 characters";
        }
    }else{
        erro_message += " Message invalid";
    }
    return false;
}

function alertMessage(){
    vall = document.getElementById('form_name').value;
    alert(vall);
}

let button = document.querySelector("#submitButton");
let form  = document.querySelector("#form_id");

// console.log(button);
button.addEventListener('click', function(event){
    // event.preventDefault();
    erro_message = "";
    let email = document.querySelector('#email').value;
    valid = validateEmail(email);
    console.log("Email: "+email+", Valid Email: "+valid);
    return valid;
});

function inputValid(){
    let email = document.querySelector('#email').value;
    let message = document.querySelector('#message').value;

    return validateEmail(email) && validateMessgae(message);
}

form.addEventListener('submit',function(event){
    erro_message = "";
    if(inputValid()){
        console.log('Form valid');
        console.log(erro_message);
        // form.submit();
        return true;
    }
    event.preventDefault();
    console.log('Form submission message: '+erro_message);
    return false;
});