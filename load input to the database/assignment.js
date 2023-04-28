function validateform(){
    var first_name = document.forms ["myform"]["first_name"].value;
    var second_name = document.forms ["myform"]["second_name"].value;

    if(first_name == ""){
        alert("first name must be filled out");
        return false;
    }
    if(second_name == ""){
        alert("second name must be filled out");
        return false;
    }
    return true;
}
document.getElementById("myform").onsubmit =function(){
    if(!validateform()){
        return false;
    }
}