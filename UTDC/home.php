<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Signin</title>
        <meta name="theme-color" content="#7952b3">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
	</head>
    <body>
        <?php
            require_once 'db/conn.php';
            $b=$crud->getUser();
            $f=0;
            $i=0;
            if(isset($_POST['submit'])){//if submit was clicked
                $email=$_POST['email'];
                $password=$_POST['password'];
                while($a = $b->fetch(PDO::FETCH_ASSOC)){
                    if($a['email'] == $email && $a['pass'] == $password){
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
                //else stay in home page(page content goes here)
            }
            else{//if no submit --> /UTDC/home.php... it will redirect the user to index.php
        ?>
                <script type="text/javascript">
                    location="index.php";
                </script>
        <?php
            }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>