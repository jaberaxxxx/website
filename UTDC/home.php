<?php
	require_once 'includes/header.php';
    require_once 'db/conn.php';
    $b=$crud->getUser();
    $f=0;
    $i=0;
    if(isset($_POST['submit'])){//if submit was clicked
        $email=$_POST['email'];
        $password=$_POST['password'];
        while($a = $b->fetch(PDO::FETCH_ASSOC)){
            if($a['email'] == $email && $a['password'] == $password){
                $f++;
                break;//break with f>0
            }
            
            else{
                $f=0;
            }
        }
        if($f==0){//if wrong email or wrong password
            ?>
            <script type="text/javascript">
                alert("Wrong Username or Password");
                location="index.php";
            </script>
            <?php

        }
        //else stay in home page
    }
    else{//if no submit --> /UTDC/home.php... it will redirect the user to index.php
        header("location:index.php");
    }


	require_once 'includes/footer.php';
?>