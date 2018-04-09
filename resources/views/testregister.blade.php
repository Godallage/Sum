<!-- css files -->
<link rel="stylesheet" href="{{'/css/bootstrap.css  '}}"   <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="{{'/css/style.css'}}" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="{{'/css/font-awesome.css'}}"> <!-- Font-Awesome-Icons-CSS -->
<link rel='stylesheet' type='text/css' href="{{'assets/css/jquery.easy-gallery.css'}}" /> <!-- For-gallery-CSS -->
<!-- //css files -->
<div class="logo">


					</div>
<br>
<br>

<form class="form-horizontal" action="{{'testregister'}}" method="post">
{{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend><center><h1>Register</h1></center></legend>

<!-- Text input-->

				<a href="https://time.is/Sri_Lanka" id="time_is_link" rel="nofollow" style="font-size:12px"></a>
<span id="Sri_Lanka_z410" style="font-size:12px"></span>
<script src="//widget.time.is/en.js"></script>
<script>
time_is_widget.init({Sri_Lanka_z410:{template:"TIME DATE", time_format:"12hours:minutes:secondsAMPM", date_format:"year-monthnum-daynum"}});
</script>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First name</label>  
  <div class="col-md-4">
  <input id="textinput" name="fname" type="text" placeholder="John" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last name</label>  
  <div class="col-md-4">
  <input id="textinput" name="lname" type="text" placeholder="Smith" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="john.smith@mail.com" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="pwd" type="password" placeholder="Enter your password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Repeat password </label>
  <div class="col-md-4">
    <input id="passwordinput" name="rpwd" type="password" placeholder="Repeat your password" class="form-control input-md" required="">
    
  </div>
</div>
 
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Register</button>
  </div>
</div>

</fieldset>
</form>


