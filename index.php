<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>

<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap');

    
*{
        margin: 0 auto;
        text-align: center;
    }

    div{
        
        height: 100vh !important;
        position: relative;
        background: rgb(215,17,124);
        background: linear-gradient(90deg, rgba(215,17,124,1) 0%, rgba(98,0,97,1) 68%);
    }


    h1{
        font-size: 40px;
        color: #fff;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
    }

    h2{
        font-size: 20px;
        color: #fff;
        padding: 40px 0 10px 0;
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
    }

    input:first-child{
        margin-top: 20px;
        width: 200px;
        height: 30px;
        border-radius: 50px;
        border: 0px;
        font-size: 18px;
        font-weight: 500;
        font-family: 'Montserrat', sans-serif;
    }

    input{
        margin-top: 20px;
        width: 100px;
        height: 30px;
        border-radius: 50px;
        border: 0px;
        font-size: 15px;
        font-weight: 500;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
    }

</style>

  
<div>

<h2>Please input your marks of preferable Subject</h2> 

<form name="form" action="" method="get">
  <input type="number" name="result">
  <input type="submit" value="Submit">
</form>


<?php


$result = isset($_GET['result']) ? $_GET['result'] : "";

if($result >= 0 && $result <= 39){

    echo "<h1>You're Fail! (F) Hope for the best in next exam.</h1>";

}elseif($result >= 40 && $result <= 44){

    echo "<h1>You got CGPA 2.00 (D) in the exam.</h1>";

}elseif($result >= 45 && $result <= 49){

    echo "<h1>You got CGPA 2.25 (C) in the exam.</h1>";

}elseif($result >= 50 && $result <= 54){

    echo "<h1>You got CGPA 2.50 (C+) in the exam.</h1>";

}elseif($result >= 55 && $result <= 59){

    echo "<h1>You got CGPA 2.75 (B-) in the exam.</h1>";

}elseif($result >= 60 && $result <= 64){

    echo "<h1>You got CGPA 3.00 (B) in the exam.</h1>";

}elseif($result >= 65 && $result <= 69){

    echo "<h1>You got CGPA 3.25 (B+) in the exam.</h1>";
    
}elseif($result >= 70 && $result <= 74){

    echo "<h1>You got CGPA 3.50 (A-) in the exam.</h1>";
    
}elseif($result >= 75 && $result <= 79){

    echo "<h1>You got CGPA 3.75 (A) in the exam.</h1>";
    
}elseif($result >= 80 && $result <= 100){

    echo "<h1>Congratulations!<br> You got CGPA 4.00 (A+) in the exam.</h1>";
    
}elseif($result == NULL){

    echo "<h1>Please Submit Your Marks!</h1>";
    
}else{

    echo "<h1>Unknown Marks! Try again.</h1>";

}

?>
</div>

</body>
</html>