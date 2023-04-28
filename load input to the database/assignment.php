<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>\
    <link rel="stylesheet" href="assignment.css">
    <script src="assignment.js"></script>
</head>
<body>
    <form id="myform" action="database.php" method="POST">
    <label for="first_name">enter first name</label>
    <input type="text" name="first_name" id="first_name" >
    <br>
    <label for="second_name">enter last name</label>
    <input type="text" name="second_name" id="second_name" >
    <br>
   <button type="submit" name="submit" id="submit">submit</button>

   </form>
   <script>
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
    return true;
}
   </script>
</body>
</html>