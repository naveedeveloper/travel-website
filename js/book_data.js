let res_guests = res_leaving = res_arrival = false;
// console.log("Ljkf;gdkljh;l");
guests_error = leaving_error = arrival_error = "";

function check_guests(){
    // console.log("check_name");
    let guests = document.getElementById('guests').value;
    let guests_error = document.getElementById('guests_error');
    const pattern = /^[0-9]*$/g;
    // console.log(name);
    res_guests = pattern.test(guests);

    if(res_guests == false || guests > 50 || guests < 1){
        guests_error.innerHTML = "Invalid name";
    }else{
        guests_error.innerHTML = "";
    }
}

function check_date(){
    let arrival = document.getElementById('arrival').value;
    let arrival_error = document.getElementById('arrival_error');
    let leaving = document.getElementById('leaving').value;
    let leaving_error = document.getElementById('leaving_error');

    if(arrival > leaving){
        arrival_error.innerHTML = "Invalid arrival date";
    }else if(leaving < arrival){
        leaving_error.innerHTML = "Invalid leaving date";
    }else{
        res_leaving = res_arrival = true;
        arrival_error.innerHTML = leaving_error.innerHTML = "";
    }
}

function prevent(){
    if(res_guests == false || res_leaving == false || res_arrival == false){
        // console.log("p");
        event.preventDefault();
    }
}
