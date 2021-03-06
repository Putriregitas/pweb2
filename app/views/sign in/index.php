<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/paper_img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Sign In</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="../bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/ct-paper.css" rel="stylesheet" />
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <link href="../assets/css/examples.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

</head>

<body>
    <nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="register-navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="#">Eleanor<br> Great Women for Great Future</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navigation-example-2">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?= BASEURL; ?>/seminar" class="btn btn-simple">Seminar</a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>/artikel" class="btn btn-simple">Artikel</a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>/profil" class="btn btn-simple">Profil</a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>/sign_in">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-->
    </nav>

    <div class="wrapper">
        <div class="register-background">
            <div class="filter-black"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                        <div class="register-card">
                            <h3 class="title">Welcome</h3>
                            <form class="register-form">
                                <label>Email / Username </label>
                                <input type="text" class="form-control" placeholder="Email / Username">

                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                                <button herf="C:\xampp\htdocs\TUGAS AKHIR PEMPRO WEB\COBA_COBA\examples\profil.html" class="btn btn-danger btn-block">sign in</button>
                            </form>
                            <div class="register">
                                <a href="<?= BASEURL; ?>/sign_up" class="btn btn-simple btn-danger">  Do Not Have Any Account Yet ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

<script src="<?= BASEURL; ?>/js/assets/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?= BASEURL; ?>/js/assets/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

<script src="<?= BASEURL; ?>/js/bootstrap3/bootstrap.js" type="text/javascript"></script>

<!--  Plugins -->
<script src="<?= BASEURL; ?>/js/assets/ct-paper-checkbox.js"></script>
<script src="<?= BASEURL; ?>/js/assets/ct-paper-radio.js"></script>
<script src="<?= BASEURL; ?>/js/assets/bootstrap-select.js"></script>
<script src="<?= BASEURL; ?>/js/assets/bootstrap-datepicker.js"></script>

<script src="<?= BASEURL; ?>/js/assets/ct-paper.js"></script>

</html>