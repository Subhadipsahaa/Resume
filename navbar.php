<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    * {
      font-family: "poppins", sans-serif;
      box-sizing: border-box;
    }

    .navbar {
      background-color: rgba(0, 0, 0, 0.455);
      border-radius: 4px;
    }

    .navbar ul {
      overflow: auto;
    }

    .navbar li {
      color: #fdfbfb;
      padding: 6px;
      float: left;
      list-style: none;
      margin: 3px;
    }

    .nlink {
      text-decoration: none;
      color: #fdfbfb;
    }

    body {
      min-height: 100vh;
      background: url('v1016-c-08.jpg') no-repeat;
      background-size: cover;
      background-position: center;
      overflow-y: auto;
    }

    .nlink:hover {
      color: rgb(101, 100, 111);
      transition-duration: 0.3s;
    }
  </style>
</head>

<body>

  <nav class="navbar">
    <div>
      <ul>
        <li><a class="nlink" href="index.php"><i class='bx bxs-home'></i> Home</a></li>
        <li><a class="nlink" href="projects.php"><i class='bx bx-code-alt'></i> Projects</a></li>
        <li><a class="nlink" href="contact.php"><i class='bx bxs-user'></i> Contact</a></li>

      </ul>
  </nav>
  </header>
</body>

</html>