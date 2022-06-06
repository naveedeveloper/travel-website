let res_name = res_email = res_subject = res_number = false;

name_error = email_error = number_error = subject_error = "";

function check_name(){
    let name = document.getElementById('name').value;
    let name_error = document.getElementById('name_error');
    const pattern = /^[A-Z|a-z]*([\s])*[A-Za-z]*$/g;
    // console.log(name);
    res_name = pattern.test(name);

    if(res_name == false || name.length > 20){
        res_name=false;
        name_error.innerHTML = "Invalid name";
    }else{
        res_name=true;
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
        res_email=false;
        email_error.innerHTML = "Invalid email";
    }else{
        res_email=true;
        email_error.innerHTML = "";
    }
}

function check_number(){
    let number = document.getElementById('number').value;
    let number_error = document.getElementById('number_error');

    const pattern = /^03([0-9]{2})(-)([0-9]{7})$/;
    res_number = pattern.test(number);
    // console.log(email);
    if(res_number == false || number.length > 12){
        res_number=false;
        number_error.innerHTML = "Invalid phone number";
    }else{
        res_number=true;
        number_error.innerHTML = "";
    }
}

function check_subject(){
    let subject = document.getElementById('subject').value;
    let subject_error = document.getElementById('subject_error');

    const pattern = /^([A-Z|a-z ])*$/;
    res_subject = pattern.test(subject);
    // console.log(email);
    if(res_subject == false || subject.length > 20){
        res_subject=false;
        subject_error.innerHTML = "Invalid Subject";
    }else{
        res_subject=true;
        subject_error.innerHTML = "";
    }
}

function prevent(){
    if(res_name == false || res_email == false || res_number == false || res_subject == false){
        event.preventDefault()
    }
}
