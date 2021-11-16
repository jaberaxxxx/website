<?php
    session_start();
    if($_SESSION['firstname'] == NULL || $_SESSION['lastname'] == NULL || $_SESSION['email'] == NULL || $_SESSION['password'] == NULL){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>User profile</title>
    <style>
        body{
            background-color:#f4f4f4;
        }
        #btn-back{
                position: fixed;
                bottom: 50px;
                right: 20px;
            }
    </style>
</head>
<body>
    <h1 class="text-center my-5 py-4" style="color:#198754;">User Details</h1>
    <table class="table container w-50 my-5">
        <tr style="background: #198754;color:white;">
            <td>First name</td>
            <td> <?php echo $_SESSION['firstname']?></td>
        </tr>
        <tr style="color:#198754;">
            <td>Last name</td>
            <td> <?php echo $_SESSION['lastname']?></td>
        </tr>
        <tr style="background: #198754;color:white;">
            <td>Date of Birth</td>
            <td> <?php echo $_SESSION['dateofbirth']?></td>
        </tr>
        <tr style="color:#198754;">
            <td>Email</td>
            <td> <?php echo $_SESSION['email']?></td>
        </tr>
        <tr style="background: #198754;color:white;">
            <td>Password</td>
            <td> <?php echo $_SESSION['password']?></td>
        </tr>
    </table>
    <form action="index.php" method="post">
        <button type="submit" name="course-exit" class="btn btn-success  btn-lg" id="btn-back">
            Back to home
        </button>
    </form>
</body>
</html>