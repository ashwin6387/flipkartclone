<?php
    session_start();
    header('Location:login.html');
    $con=mysqli_Connect('localhost','root');
    if($con){
        echo "Connection Successfully"
    }
    else{
        echo "No Connection";
    }

    mysqli_select_db($con,'giftcombo-clone');
    $name = $_POST['email'];
    $pass = $_POST['password'];

    $quer_ "Select user-data where username - '$name' && password'";
    $result= mysqli_query($con, $quer);
    $num = mysqli_num_rows($result);
    if($num==1)
    {
        echo "Duplicate Data";
    }
    else{
        $querr="insert into user-data(username, password) value('$name', '$pass')"
        mysqli_query($con, $querr);
    }
?>