<?php /* Smarty version Smarty-3.1.15, created on 2016-04-29 02:19:15
         compiled from "/opt/lbaw/lbaw1514/public_html/proto/templates/noticias/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:649069669572297be6c28e5-12768677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15674df61a2c84ed23dc2e7735177bae12d80937' => 
    array (
      0 => '/opt/lbaw/lbaw1514/public_html/proto/templates/noticias/home.tpl',
      1 => 1461889152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '649069669572297be6c28e5-12768677',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_572297be74f378_22588353',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572297be74f378_22588353')) {function content_572297be74f378_22588353($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>NOW - News </title>


<!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/animate.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/sidebar-collapse.css">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">

    <div class="topbar2 animated fadeInLeftBig"></div>
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logo.png" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#works">Home</a></li>
                 <li ><a href="#contentInfo">About</a></li>
                 <li ><a href="#contact">Contacts</a></li>
                 <li ><a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Register/Login</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>

<!--MODAL WINDOW -->
<div class="container">
    <!-- Trigger the modal with a button -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <div id="loginbox" style="margin-top:10px;" class="mainbox col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2">
                            <div class="panel panel-info" >
                                <div class="panel-heading">
                                    <div class="panel-title">Sign In</div>
                                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                                </div>

                                <div style="padding-top:30px" class="panel-body" >

                                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                                    <form id="loginform" class="form-horizontal" role="form">

                                        <div style="margin-bottom: 25px" class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                                        </div>

                                        <div style="margin-bottom: 25px" class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                        </div>



                                        <div class="input-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                                </label>
                                            </div>
                                        </div>


                                        <div style="margin-top:10px" class="form-group">
                                            <!-- Button -->

                                            <div class="col-sm-12 controls">
                                                <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                                <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-12 control">
                                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                    Don't have an account!
                                                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                                        Sign Up Here
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        </div>
                        <div id="signupbox" style="display:none; margin-top:10px" class="mainbox col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <div class="panel-title">Sign Up</div>
                                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                                </div>
                                <div class="panel-body" >
                                    <form id="signupform" class="form-horizontal" role="form">

                                        <div id="signupalert" style="display:none" class="alert alert-danger">
                                            <p>Error:</p>
                                            <span></span>
                                        </div>



                                        <div class="form-group">
                                            <label for="email" class="col-md-3 control-label">Email</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="email" placeholder="Email Address">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="firstname" class="col-md-3 control-label">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-md-3 control-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" name="passwd" placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="icode" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <!-- Button -->
                                            <div class="col-md-offset-3 col-md-9">
                                                <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                                <span style="margin-left:8px;">or</span>
                                            </div>
                                        </div>

                                        <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

                                            <div class="col-md-offset-3 col-md-9">
                                                <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                            </div>

                                        </div>



                                    </form>
                                </div>
                            </div>




                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</div>




<!-- #Header Starts -->

<aside class="sidebar-left-collapse">

    <a href="javascript:void(0)" class="company-logo">Logo</a>

    <div class="sidebar-links">

        <div id="custom-search-input">
            <div class="input-group col-md-12">
                <input type="text" class="form-control input-lg" placeholder="Buscar" />
                    <span class="input-group-btn">
                        <button id="searchB" class="btn btn-info btn-xs" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
            </div>
        </div>


        <div class="link-blue selected">

            <a href="javascript:void(0)">
                <i class="fa fa-picture-o"></i>Sort News
            </a>

            <ul class="sub-links">

                        <li>
                            <label><input type="radio" name="recent"/> Recent</label>
                        </li>

                        <li>
                            <label><input type="radio" name="trending"/> Trending </label>
                        </li>

                        <li>
                            <label><input type="radio" name="voted"/> Most Voted </label>
                        </li>

                        <li>
                            <label><input type="radio" name="watched"/> Most Watched </label>
                        </li>
            </ul>

        </div>


        <div class="link-red">

            <a href="javascript:void(0)">
                <i class="fa fa-heart-o"></i>My Favorites
            </a>

            <ul class="sub-links">
                <li>
                    <label><input type="radio" name="recent"/> Recent</label>
                </li>

                <li>
                    <label><input type="radio" name="trending"/> Trending </label>
                </li>

                <li>
                    <label><input type="radio" name="voted"/> Most Voted </label>
                </li>

                <li>
                    <label><input type="radio" name="watched"/> Most Watched </label>
                </li>
            </ul>

        </div>

        <div class="link-yellow">

            <a href="javascript:void(0)">
                <i class="fa fa-keyboard-o"></i>User Profile
            </a>

            <ul class="sub-links">
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">View Statistics</a></li>
                <li><a href="#">Manage News</a></li>
                <li><a href="#">Manage Communities</a></li>
                <li><a href="#">Logout</a></li>
            </ul>

        </div>

        <div class="link-green">

            <a href="javascript:void(0)">
                <i class="fa fa-map-marker"></i>Other
            </a>

            <ul class="sub-links">
                <li><a href="javascript:void(0)">Could Possibly be used!</a></li>
            </ul>

        </div>

    </div>

</aside>

<div id="squarebox-container">

<!-- works -->
<div id="works"  class=" clearfix grid">






    <figure class="effect-oscar  wowload fadeIn">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/portfolio/1.jpg" alt="img01"/>
        <figcaption>
            <h2>Nature</h2>
            <p>Phasellus luctus pellentesque metus tec euismod ...<br>
            <a href="#" title="1" >View more</a>
            <a href="#" data-gallery><i class="fa fa-facebook fa-1x"></i></a>
               </p>
            <p>  <a href="community.html" >/n/Environment</i></a></p>
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/portfolio/2.jpg" alt="img01"/>
        <figcaption>
            <h2>Events</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="#" title="1" >View more</a>
                <a href="#" data-gallery><i class="fa fa-facebook fa-1x"></i></a></p>
            <p>  <a href="community.html" >/n/Social</i></a></p>
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/portfolio/3.jpg" alt="img01"/>
        <figcaption>
            <h2>music</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="#" title="1" >View more</a>
                <a href="#" data-gallery><i class="fa fa-facebook fa-1x"></i></a></p>
            <p>  <a href="community.html" >/n/Social</i></a></p>
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/portfolio/4.jpg" alt="img01"/>
        <figcaption>
            <h2>Vintage</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="news.html" title="1" >View more</a>
                <a href="#" data-gallery><i class="fa fa-facebook fa-1x"></i></a></p>
            <p>  <a href="#" >/n/Antiques</i></a></p>
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/portfolio/5.jpg" alt="img01"/>
        <figcaption>
            <h2>Typers</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="#" title="1" >View more</a>
                <a href="#" data-gallery><i class="fa fa-facebook fa-1x"></i></a></p>
            <p>  <a href="community.html">/n/Antiques</i></a></p>
        </figcaption>
    </figure>

     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/portfolio/6.jpg" alt="img01"/>
        <figcaption>
            <h2>hotel</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="news.html" title="1" >View more</a>
                <a href="#" data-gallery><i class="fa fa-facebook fa-1x"></i></a></p>
            <p>  <a href="#">/n/Food&Drink</i></a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/portfolio/7.jpg" alt="img01"/>
        <figcaption>
            <h2>Chinese</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="news.html" title="1" >View more</a>
                <a href="#" data-gallery><i class="fa fa-facebook fa-1x"></i></a></p>
            <p>  <a href="#">/n/GlobalWarning</i></a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/portfolio/8.jpg" alt="img01"/>
        <figcaption>
            <h2>Dicrap</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="#" title="1" >View more</a>
                <a href="#" data-gallery><i class="fa fa-facebook fa-1x"></i></a></p>
            <p>  <a href="#" >/n/Antiques</i></a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/portfolio/9.jpg" alt="img01"/>
        <figcaption>
            <h2>Coffee</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="news.html" title="1" >View more</a>
                <a href="#" data-gallery><i class="fa fa-facebook fa-1x"></i></a></p>
            <p>  <a href="#" data-gallery>/n/Food&Drink</i></a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/portfolio/10.jpg" alt="img01"/>
        <figcaption>
            <h2>cameras</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="#" title="1" >View more</a>
                <a href="#" data-gallery><i class="fa fa-facebook fa-1x"></i></a></p>
            <p>  <a href="#" data-gallery>/n/Antiques</i></a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/portfolio/11.jpg" alt="img01"/>
        <figcaption>
            <h2>design</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="#" title="1" >View more</a>
                <a href="#" data-gallery><i class="fa fa-facebook fa-1x"></i></a></p>
            <p>  <a href="#" data-gallery>/n/Business</i></a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/portfolio/12.jpg" alt="img01"/>
        <figcaption>
            <h2>studio</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="#" title="1" >View more</a>
                <a href="#" data-gallery><i class="fa fa-facebook fa-1x"></i></a></p>
            <p>  <a href="#" data-gallery>/n/Art</i></a></p>
        </figcaption>
    </figure>



</div>
<!-- works -->



<!-- Cirlce Starts
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Creative digital agency based on London</h2>
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-paint-brush"></i> Design</h4>
    <p>Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs, lead by passionate and uber progressive team that lives and breathes design. Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs.</p>


  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4><i class="fa fa-code"></i> Frontend & Backend Development</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  </div>
  </div>

  <div class="process">
  <h3 class="text-center wowload fadeInUp">Process</h3>
  <ul class="row text-center list-inline  wowload bounceInUp">
      <li>
            <span><i class="fa fa-history"></i><b>Research</b></span>
        </li>
        <li>
            <span><i class="fa fa-puzzle-piece"></i><b>Plan</b></span>
        </li>
        <li>
            <span><i class="fa fa-database"></i><b>Develop</b></span>
        </li>
        <li>
            <span><i class="fa fa-magic"></i><b>Integration</b></span>
        </li>
        <li>
            <span><i class="fa fa-cloud-upload"></i><b>Deliver</b></span>
        </li>
    </ul>
  </div>
</div> -->
<!-- #Cirlce Ends -->



<!-- About Starts -->
    <div id="contentInfo">
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-smile-o  fa-5x"></i><h4>1024 Users Registered</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-rocket  fa-5x"></i><h4>256 News Created</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-cloud-download  fa-5x"></i><h4>2048 Interactions Made</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-map-marker fa-5x"></i><h4>1 Server</h4>
  </div>
</div>
</div>
</div>
</div>
        </div>
<!-- About Ends -->

    <!--
    <div id="partners" class="container spacer ">
        <h2 class="text-center  wowload fadeInUp">Some of our happy clients</h2>
      <div class="clearfix">
        <div class="col-sm-6 partners  wowload fadeInLeft">
             <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/partners/1.jpg" alt="partners">
             <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/partners/2.jpg" alt="partners">
             <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/partners/3.jpg" alt="partners">
             <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/partners/4.jpg" alt="partners">
        </div>
        <div class="col-sm-6">


        <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
        <div class="carousel-inner">
          <div class="item active animated bounceInRight row">
          <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/1.jpg" width="100" class="img-circle img-responsive"></div>
          <div  class="col-xs-10">
          <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>
          <span>Angel Smith - <b>eshop Canada</b></span>
          </div>
          </div>
          <div class="item  animated bounceInRight row">
          <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/2.jpg" width="100" class="img-circle img-responsive"></div>
          <div  class="col-xs-10">
          <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
          <span>John Partic - <b>Crazy Pixel</b></span>
          </div>
          </div>
          <div class="item  animated bounceInRight row">
          <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="images/team/3.jpg" width="100" class="img-circle img-responsive"></div>
          <div  class="col-xs-10">
          <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
          <span>Harris David - <b>Jet London</b></span>
          </div>
          </div>
      </div>



       <!-- Indicators
   	<ol class="carousel-indicators">
    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
  	</ol>
  	<!-- Indicators
  </div>



    </div>
  </div>

-->


<h3 id="contact" class="text-center  wowload fadeInUp">Our team</h3>
<p class="text-center  wowload fadeInLeft">Our creative team that is making everything possible</p>
<div class="row grid team  wowload fadeInUpBig">
	<div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/team/8.jpg" alt="img01" class="img-responsive" />
        <figcaption>
            <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/team/10.jpg" alt="img01"/>
        <figcaption>
            <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/team/12.jpg" alt="img01"/>
        <figcaption>
            <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/team/17.jpg" alt="img01"/>
        <figcaption>
            <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
        </figcaption>
    </figure>
    </div>


</div>
<!-- team -->

</div>















<!--Contact Starts
<div id="contact" class="spacer">

<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">Get in touch to start your project</h2>
  <div class="row wowload fadeInLeftBig">
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Company">
        <textarea rows="5" placeholder="Message"></textarea>
        <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
      </div>
  </div>



</div>
</div>-->
<!--Contact Ends-->



<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
Copyright 2016 NOW - News On Wire. All rights reserved.
</div>

</div>
<!-- # Footer Ends -->
<a href="#works" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>



<!-- jquery -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.js"></script>

<!-- wow script -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/wow.min.js"></script>


<!-- boostrap -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/touchSwipe.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/respond.js"></script>

<!-- gallery -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.blueimp-gallery.min.js"></script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

    $(function () {

        var links = $('.sidebar-links > div');

        links.on('click', function () {

            links.removeClass('selected');
            $(this).addClass('selected');

        });
    });

</script>

</body>
</html><?php }} ?>
