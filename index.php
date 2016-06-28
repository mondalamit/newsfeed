<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Feed App</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <h3 class="text-muted">News Feed</h3>
      </div>

      <div class="jumbotron" id="initial_modal">
        <h1>News Feed</h1>
        <p class="lead">Get news from a variety of sources.</br>Sign in or create an account to get started.</p>
        <p><a class="btn btn-success signin" role="button">Sign In</a></p>
        <p><a class="btn btn-success createacc" role="button">Create Account</a></p>
      </div>

      <div class="jumbotron" id="signin_modal">
        <h1>Sign In</h1>
        <p><form id="signinForm">
          <div class="form-group">
            <label class="sr-only" for="usernameLogin">Username</label>
            <input type="text" class="form-control" name="usernameLogin" placeholder="Username">
          </div>
          <div class="form-group">
            <label class="sr-only" for="passwordLogin">Password</label>
            <input type="password" class="form-control" name="passwordLogin" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-success">Go</button>
        </form></p>
        <a class="createacc">Don't have an account?</a>
      </div>

      <div class="jumbotron" id="createaccount_modal">
        <h1>Create Account</h1>
        <p><form id="createaccForm">
          <div class="form-group">
            <label class="sr-only" for="usernameCreate">Username</label>
            <input type="text" class="form-control" name="usernameCreate" placeholder="Username">
          </div>
          <div class="form-group">
            <label class="sr-only" for="passwordCreate">Password</label>
            <input type="password" class="form-control" name="passwordCreate" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-success">Create</button>
        </form></p>
        <a class="signin">Already have an account?</a>
      </div>

      <div class="rss">
        <div class="filters">
          <span>U.S.</span>
          <span>World</span>
          <span>Sports</span>
          <span>Technology</span>
        </div>
        <div class="">
          <div class="article">
            <h3>Texas to Secede from Union</h3>
            <h6>Bo Burnham, Aug. 12 1969</h6>
            <p>Texans want to secede from the union to form a lone star state.</p>
          </div>
          <div class="article">
            <h3>Texas to Secede from Union</h3>
            <h6>Bo Burnham, Aug. 12 1969</h6>
            <p>Texans want to secede from the union to form a lone star state.</p>
          </div>
          <div class="article">
            <h3>Texas to Secede from Union</h3>
            <h6>Bo Burnham, Aug. 12 1969</h6>
            <p>Texans want to secede from the union to form a lone star state.</p>
          </div>
        </div>
      </div>

      <footer class="footer">
        <p>Made with &hearts; by Amit Mondal</p>
        <small id="dateFooter"></small>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
    <script src="/js/app.js"></script>
  </body>
</html>
