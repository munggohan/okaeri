
function validation(){
    var fname_input = document.getElementById("i_fname").value;
    var fname_label = document.getElementById("l_fname").value;
    if(fname_input === ""){
        document.getElementById("l_fname").innerHTML = "Please fill out this form.";
    }
}
