<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shadow</title>
    <link rel="stylesheet" href="admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-theme.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <script src="beh.js" type="text/javascript"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<div class="container-fluid" style="  background-image: image("dragon.jpg")">
<div class="row">

        <nav class="col-md-12 nav navbar">
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#n">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="#" class="navbar-brand">Shadow</a>
        </div>

        <ul class="nav navbar-nav" id="n">
            <li><a href="home.php">Home</a></li>
            <li><a href="carrer.php">Carrer</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Contact us</a>
                <ul id="sub" class="dropdown-menu navbar-default">
                    <li><a href="#"></>Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right" id="n">
            <li><a href=""><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
            <li><a href=""><span class="glyphicon glyphicon-user"></span>&nbsp;Sign Up</a></li>
        </ul>

    </nav>
</div>

<div class="row col-md-offset-2" id="col">
    <div class="col-md-3">

        <span id="im">
            <img src="abc.jpg" alt="" width="200" style="position: absolute;
    left: 27px;
    top: 10px;
    z-index:1;">
        </span>   <p style=" position:inherit; left: 10px;
    top: 10px; z-index:1">
            <br>
            <br>
            <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, animi commodi consequatur consequuntur dolorem eligendi
            excepturi facilis illo, incidunt inventore ipsa ipsum nemo nobis provident quo quos sapiente sint, tempore?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, animi commodi consequatur consequuntur dolorem eligendi
            excepturi facilis illo, incidunt inventore ipsa ipsum nemo nobis provident quo quos sapiente sint, tempore?
        </p> <p class="p" style="display: none;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, animi commodi consequatur consequuntur dolorem eligendi
            excepturi facilis illo, incidunt inventore ipsa ipsum nemo nobis provident quo quos sapiente sint, tempore?
            <br></p>
        <button  id="btn" type="button" class="btn btn-danger">Read more...</button>
    </div>

    <div class="col-md-3">
        <div id="img">
            <img src="abc.jpg" alt="" width="200">
        </div>
        <br>
        <br>
        <br>
        <p >
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, animi commodi consequatur consequuntur dolorem eligendi
            excepturi facilis illo, incidunt inventore ipsa ipsum nemo nobis provident quo quos sapiente sint, tempore?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, animi commodi consequatur consequuntur dolorem eligendi
            excepturi facilis illo, incidunt inventore ipsa ipsum nemo nobis provident quo quos sapiente sint, tempore?
        </p>  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, animi commodi consequatur consequuntur dolorem eligendi
            excepturi facilis illo, incidunt inventore ipsa ipsum nemo nobis provident quo quos sapiente sint, tempore?
            <br></p>
        <button  type="button" class="btn btn-danger">Read more...</button>
    </div>
    <div class="col-md-3">
        <p >sadsa da dsadsa sdgfg d ghgh fdgjhkj hkh jfhfdg gjf gdfjhbgdfkg fdkfdjg fdkjg fdjkg fdkjg dfjkgdfkjg df
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, animi commodi consequatur consequuntur dolorem eligendi
            excepturi facilis illo, incidunt inventore ipsa ipsum nemo nobis provident quo quos sapiente sint, tempore?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, animi commodi consequatur consequuntur dolorem eligendi
            excepturi facilis illo, incidunt inventore ipsa ipsum nemo nobis provident quo quos sapiente sint, tempore?
        </p>  <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, animi commodi consequatur consequuntur dolorem eligendi
            excepturi facilis illo, incidunt inventore ipsa ipsum nemo nobis provident quo quos sapiente sint, tempore?
            <br></p>
        <button type="button" class="btn btn-danger" >Read more...</button>
    </div>




</div>
</div>

<footer class="panel-success col-md-12" id="foot">
    <p class=" col-md-4 col-md-offset-5">
        <a href="" class="fa fa-facebook"> &nbsp;</a>
        <a href="" class="fa fa-google">&nbsp; </a>
        <a href="" class="fa fa-instagram"></a> &nbsp;</p>
    <div class="col-md-6 col-md-offset-4">
        <p><a href="gg" class="navbar-text">Give your feed back about this shadow.com <br></a></p>
    </div>

    <p style="color: #555555; margin-right: 5px" class="navbar-right navbar-text">Copywrite by Umar javaid </p>


</footer>
</body>

</html>