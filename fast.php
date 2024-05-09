<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['ok']) {
            if ($_POST['passw'] == $_POST['cpassw']) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbName = "projreg";
                $conn = new mysqli($servername, $username, $password, $dbName);
                if ($conn->connect_error) {
                    die("connection faild:" . $conn->connect_error);
                } else
                    echo "success";


                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $uname = $_POST['uname'];
                $country = $_POST['cname'];
                $phone = $_POST['pnum'];
                $pass = password_hash($_POST['passw'], PASSWORD_DEFAULT);
                $sql = " INSERT INTO `register` (`fanme`, `lname`, `uname`, `country`, `phone`, `password`) VALUES ('$fname', '$lname', '$uname', '$country', '$phone', '$pass')";
                $ress = mysqli_query($conn, $sql);
                if ($ress) {
                    echo "succ";
                    header("refresh:3;url=login.php");
                } else {
                    echo "unsucc";
                    header("refresh:3;url=register.php");
                }
            } else {
                echo "<p class=\"error\">" . "Password mismatch" . "</p>";
                header("refresh:3;url=register.php");
            }
        }
    }

    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>