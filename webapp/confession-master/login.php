<?php
if(isset($_GET['success'])){
  $success = $_GET['success'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>I-Confession Board</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link rel="stylesheet" href="css/style1.css">
  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">
  <link href="css/style5.css" rel="stylesheet">
</head>

<body id="page-top">

        <a class="js-scroll-trigger" href="#page-top">I-ConfessionBoard</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="index.php">Home</a>
      </li>
    </ul>
  </nav>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <header class="card-header">
            <a href="signup.php" class="float-right btn btn-outline-primary mt-1">Sign Up</a>
            <h4 class="card-title mt-2">Log In</h4>
            <?php if(isset($success)):?>
              <div class="alert"><?php echo $success; ?></div>
            <?php endif;?>
          </header>
          <article class="card-body">
            <form method="post" action="auth.php">
              <div class="form-row">
                <div class="col form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" placeholder="" required>
                </div>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="text" name="pass" class="form-control" placeholder="" required>
              </div>
            </div><br>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block"> Login  </button>
            </div>
          </form>
        </article>
      </div>
    </div>
  </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

  <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</body>
</html>
