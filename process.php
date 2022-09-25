<?php

    if(isset($_POST['btn-send'])) {
        $UserName = $_POST ['username'];
        $Email = $_POST ['email'];
        $Subject = $_POST ['subject'];
        $Message = $_POST ['message'];

        if(empty($UserName) || empty($Email) || empty($Subject) || empty($Message))
        {
            header('location:index.php?error');
        }
        else {
            $to = "nayyer_51@hotmail.com";

            if(mail($to,$Subject,$Message,$Email)){
                header("location:index.php?success");
            }
        }
    }

    else {
        header("location:idnex.php");
        
    }

?>