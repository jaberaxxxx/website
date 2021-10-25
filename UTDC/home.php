<?php
    session_start();
?>
<?php
    require_once 'db/conn.php';
    $b=$crud->getUser();
    $f=0;
    if(isset($_POST['submit'])){//if submit was clicked
        $email=$_POST['email'];
        $password=$_POST['password'];
        while($a = $b->fetch(PDO::FETCH_ASSOC)){
            if($a['email'] == $email && $a['pass'] == $password){
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;//if email and password exist we login and save the email and password in the session array
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
    }

    //else if everything works then we excute the following code
    require_once 'includes/header.php';
    echo 'home'.'<br>'.$_SESSION['email'].' '.$_SESSION['password'];//test to see that the session array always hold the variables until we close the session(index.php-->isset($_POST['sign-out']))
    
    require_once 'includes/footer.php';
?>