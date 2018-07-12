<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app/views/web/css/style_login.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script src="<?php echo BASE_URL; ?>app/views/web/js/jquery.backgroundMove.js"></script>
<link href="<?php echo BASE_URL; ?>app/views/web/css/font-awesome.css" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo BASE_URL; ?>app/views/web/css/bootstrap.min.css" >
</head>
<body>

	<div class="box">
		<div class="container ">
			<div class="row margin_class">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<h4>Login Form</h4>
						<div class="panel-body">
							
							 <form>
							    <div class="form-group">
							      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
							    </div>
							    <div class="form-group">
							      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
							    </div>
							    <div class="form-group">
							      <input id="msg" type="submit" class="btn btn-success btn-block btn-lg" name="" value="Login">
							    </div>
							</form>
						</div><!-- Panel body -->
						<div class="lock"><i class="fa fa-lock "></i></div>
					</div>
				</div>
			</div>
		</div>
	</div> 


<script>
$('.box').backgroundMove({
	movementStrength:'50'});
</script>
</body>
</html>
