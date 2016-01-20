<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Material Login Form</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    
    <!-- Mixins-->
    <!-- Pen Title-->
    <div class="pen-title">
      <h1>Login Form</h1><span>Week 9 <i class='fa fa-code'></i> ITE220: Web Development II  </span>
    </div>
    <div class="container">
      <div class="card"></div>
      <div class="card">
        <h1 class="title">You are already logged in as <?php echo $_SESSION['username']; ?></h1>
       <center> <a href="welcome.php">Welcome</a></center>
      </div>
    </div>
    <!-- Portfolio--><a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
    <!-- CodePen--><a id="codepen" href="http://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>
        <script src='js/jquery.min.js'></script>
        <script src="js/index.js"></script>
  </body>
</html>
