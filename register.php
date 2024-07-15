<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="5087579.png">
    <title>Sign Up</title>
    <link rel="stylesheet" href="rstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <div id="form">
        <img src="5087579.png" id="logo">
        <h1>Register</h1>
        <form method="POST" action="#">
            <div class="inputbox">
                <label for="fname">First Name: </label>
                <input type="text" id="fname" name="fname" placeholder="Enter Your First Name" required autofocus>
            </div>
            <br>
            <div class="inputbox">
                <label for="lname">Last Name: </label>
                <input type="text" id="lname" name="lname" placeholder="Enter Your Last Name" required autofocus>
            </div>
            <br>
            <div class="inputbox">
                <label for="uname">Username: </label>
                <input type="text" id="uname" name="uname" placeholder="Username" pattern=".{5,}" title="Username must be at least 5 charactors long" required autofocus>
            </div>
            <br>
            <div class="inputbox">
                <label for="cname">Country: </label>
                <select name="cname" size="1" class="cname">
                    <option value="India">India</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="inputbox">
                <label for="pnum">Phone: </label>
                <input type="tel" id="pnum" name="pnum" placeholder="Enter Phone Number" required autofocus pattern="[0-9]{10}" maxlength="10">
            </div>
            <br>
            <div class="inputbox">
                <label for="passw">Password: </label>
                <input type="password" id="passw" name="passw" placeholder="Password" pattern=".{8,}" title="Password must be at least 8 charactors long">
            </div>
            <br>
            <div class="inputbox">
                <label for="cpassw"> Confirm Password: </label>
                <input type="password" id="cpassw" name="cpassw" placeholder="Retype Password" pattern=".{8,}" title="Password must be same">
            </div>
            <br>
            <div>
                <a class="rlink" href="login.php">Already have an account?</a>
            </div>
            <div id="button">
                <input type="submit" id="btn" name="ok" value="Sumbit">
                <!-- <button id="btn" type="submit">Continue</button> -->
                <button id="rst" type="reset">Clear</button>
                <!-- <input type="button" id="rst" value="Clear" -->
            </div>
        </form>


    </div>
</body>

</html>