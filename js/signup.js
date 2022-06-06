let res_name = res_email = false;
// console.log("Ljkf;gdkljh;l");
name_error = email_error = "";

function check_name(){
    // console.log("check_name");
    let name = document.getElementById('name').value;
    let name_error = document.getElementById('name_error');
    const pattern = /^[A-Z|a-z]*([\s])*[A-Za-z]*$/g;
    // console.log(name);
    res_name = pattern.test(name);

    if(res_name == false || name.length > 20){
        res_name = false;
        name_error.innerHTML = "Invalid name";
    }else{
        res_name = true;
        name_error.innerHTML = "";
    }
}

function check_email(){
    let email = document.getElementById('email').value;
    let email_error = document.getElementById('email_error');

    const pattern = /^[[A-Z]|[a-z]|[0-9]|!|#|$|%| &| '| *| +| - | _| ` | {|  }| ~]*@([gmail.com|hotmail.com|yahoo.com|nu.edu.pk|org.pk]{1})$/g;
    res_email = pattern.test(email);
    // console.log(email);
    if(res_email == false || email.length > 20){
        res_email = false;
        email_error.innerHTML = "Invalid email";
    }else{
        res_email = true;
        email_error.innerHTML = "";
    }
}

function prevent(){
    if(res_name == false || res_email == false){
        console.log("Prevent");
        event.preventDefault();
    }
}
