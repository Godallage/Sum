
<html>

<!-- css files -->
<link rel="stylesheet" href="{{'/css/bootstrap.css  '}}"   <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="{{'/css/style.css'}}" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="{{'/css/font-awesome.css'}}"> <!-- Font-Awesome-Icons-CSS -->
<link rel='stylesheet' type='text/css' href="{{'assets/css/jquery.easy-gallery.css'}}" /> <!-- For-gallery-CSS -->
<!-- //css files -->

<div class="header">
		<div class="container">
			<div class="w3l_header_left">
				<ul>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:info@example.com">info@robustsyssol.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +141 587 426 825</li>
				</ul>
			</div>
			<div class="w3l_header_right">
				<div class="w3ls-social-icons">
					<a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="https://twitter.com"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="https://www.pinterest.com/"><i class="fa fa-google-plus"></i></a>
					<a class="linkedin" href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin"></i></a>
					<a class="tumblr" href="https://www.tumblr.com/"><i class="fa fa-tumblr"></i></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>


	</div>
				<a href="https://time.is/Sri_Lanka" id="time_is_link" rel="nofollow" style="font-size:12px"></a>
<span id="Sri_Lanka_z410" style="font-size:12px"></span>
<script src="//widget.time.is/en.js"></script>
<script>
time_is_widget.init({Sri_Lanka_z410:{template:"TIME DATE", time_format:"12hours:minutes:secondsAMPM", date_format:"year-monthnum-daynum"}});
</script>

	<div class="header-bottom">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">


					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				
				



							
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>



<section id="login">
    <div class="container ">
    	<div class="row">
    	    <div class="col-xs-6 col-md-offset-3">
        	    <div class="form-wrap">
                <h1>LOGIN</h1>
                    <form role="form" action=""{{'testlogin'}}"" method="post" id="login-form" autocomplete="off">
{{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Show password</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    </form>
                    <a href="{{'testregister'}}" class="Register" data-toggle="modal" data-target=".forget-modal">Register</a>
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
</body>
</html>



