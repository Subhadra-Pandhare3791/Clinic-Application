<?php

include('Db_Connect.php');
session_start();


if(isset($_SESSION['Name'])){
    // echo '<script>alert("valid Accesss!!")</script>';
}else{
    ?>
    <script>
        swal("Error!", "Invalid Access Login First !!", "error");
    </script>
    <script>
        window.location.href = "Register.php";
    </script>
    <?php
}

$User_ID = $_SESSION['ID'];
$User_EMial = $_SESSION['Email'];
$User_Name = $_SESSION['Name'] ;
$phone = $_SESSION['Phone'];
$Pass = $_SESSION['Pass'];
$Gender = $_SESSION['Gend'];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello <?php echo $User_Name; ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        nav {
            background: #ff5a60eb;
        }

        nav .navbar-collapse .collapse li.active {
            color: #000;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        nav a:hover {
            color: #000;
        }

        .profile {
            margin-top: 80px;
            margin-bottom: 80px;
        }

        .profile .dashboard {
            background: #fff;
            padding: 25px;
            box-shadow: 0 15px 20px rgba(0, 0, 0, 0.5);
        }
        
        h3{
            padding: 5px;
            text-align: center;
            margin: 50px 0;
            color: #00bcd5;
            font-weight: bold;
            font-family: 'Roboto', sans-serif;
        }
        .family .dashboard{
            display: flex;
            justify-content: space-around;
            align-items: center;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
        }
        .family .dashboard button a{
            color: #fff;
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Bharti Hospital</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        
    </nav>


    <h3>User Information</h3>
    
    <div class="container profile family my-5">
        <div class="dashboard">
            <button type="button" class="btn btn-success" style="color:#fff;"> <a href="Appointment.php">Appointment Form</a></button>
            <button type="button" class="btn btn-success" style="color:#fff;"><a href="Cotact_us.php">Contact Us</a></button>
            <button type="submit" class="btn btn-danger" style="color:#fff;"><a href="logout.php">Logout</a></button>
        </div>
    </div>

    <div class="container profile">
        <div class="dashboard">
            <form method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email ID :</label>
                        <input type="email" class="form-control" name="Email_ID" id="inputEmail4" value="<?php echo $User_EMial; ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password :</label>
                        <input type="password" class="form-control" name="Email_Pass" id="inputPassword4" value="<?php echo $Pass; ?> ">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Name :  </label>
                        <input type="text" class="form-control" name="User_Name" id="inputCity" value="<?php echo $User_Name; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputZip">Gender :  </label>
                        <input type="text" class="form-control" name="User_Gender" id="inputZip" value="<?php echo $Gender; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Phone No :</label>
                        <input type="text" class="form-control" name="User_Phone" id="inputEmail4" value=" <?php echo $phone; ?> ">
                    </div>
                </div>
                <input type="submit" name="update" value="Update Profile" class="btn w-100" style="background: #00bcd5; color:#fff;"></button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>

<?php

if(isset($_POST['update'])){
    $Name = mysqli_real_escape_string($Con, $_POST['User_Name']);
    $Email = mysqli_real_escape_string($Con, $_POST['Email_ID']);
    $Password = mysqli_real_escape_string($Con, $_POST['Email_Pass']);
    $Gender = mysqli_real_escape_string($Con, $_POST['User_Gender']);
    $Phone = mysqli_real_escape_string($Con, $_POST['User_Phone']);

    $Updaet_Query = "UPDATE `users` SET `Name`='$Name',`Email`='$Email',`Password`='$Password',`Gender`='$Gender',`Phone`='$Phone' WHERE `Email`='$Email'";

    $Result_Update = mysqli_query($Con,$Updaet_Query);
    
    if ($Result_Update) {
        ?>
        <script>
            swal("Good job!", "Updated Succesfull !!", "success");
        </script>
        <?php
    } else {
        ?>
        <script>
            swal("Error!", "Error In Updation !!", "error");
        </script>
        <?php
    }
}

?>