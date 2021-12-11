

function singup_button_press(){

    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirm_password = document.getElementById('confirm_password').value;

    console.log(username+"\n"+email+"\n"+password+"\n"+confirm_password);

    if(username.trim()=="" || email.trim()=="" || password.trim()=="" || confirm_password.trim()==""){
        alert("Input Fields Can Not Be Empty");
    }else{
        console.log("ALL Input fields are filled");

        




    }

}