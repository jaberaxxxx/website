<?php
    require_once 'db/conn.php';
    $b=$crud->getUser();
    $f=0;
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        while($a = $b->fetch(PDO::FETCH_ASSOC)){//for some reasone it is  entering an infinite loop;
            if($a['email'] == $email && $a['password'] == $password){
                //header("location:home.php");
                $f++;
                break;
            }
            
            else{
                //header("location:index.php");
                $f=0;
            }
        }
        if($f==0){
            header("location:index.php");

        }

    }
    else{
        header("location:index.php");
    }
?>