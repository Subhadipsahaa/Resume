<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="icon" type="image" href="code-block-regular-24.png">
    <style>
        .proj ul{
            list-style: none;   
        }
        .project{
            text-decoration: none;
            color: white;
            background-color: rgba( 0, 0, 0, 0.2);
            padding: 11px;
            border-radius: 7%;
        }
        h1{
            color: White;
            background-color: rgba( 0, 0, 0, 0.2);
            padding: 1%;
            display: inline-block;
            width: 160px;
            border-radius: 7%;
        }
        .project:hover{
            color: rgb(101, 100, 111);
            transition-duration: 0.2s;
        }
    </style>
</head>
<body>
    <?php
include 'navbar.php'
?>

    <h1>Projects</h1>
    <div class="proj">
        <ul>
            <div>
            <li><a class="project" target="_blank" title="Sign In Project" href="login.html"><i class='bx bxs-right-arrow-circle bx-fade-right-hover'></i> Log in page</a></li>
            </div>
            <br>
            <br>
            <!-- <div>
            <li><a class="project" target="_blank" title="Sign In Project" href="SocialMedia.html"><i class='bx bxs-right-arrow-circle bx-fade-right-hover'></i> Social Media</a></li>
            </div> -->
        </ul>     
    </div>
</body>
</html>