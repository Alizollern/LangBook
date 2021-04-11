<!DOCTYPE html>
<html>
<head>
	<title>Technical Support</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('packs/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	<div >
		<form action="" method="POST">
			@csrf
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="name" placeholder="Enter your name">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" placeholder="Enter your email">
			</div>
			<div class="form-group">
				<label for="">Book name</label>
				<input type="text" name="subject" placeholder="Enter book name">
			</div>
			<div class="form-group">
				<textarea name="message" id="" cols="5" rows="5"></textarea>
			</div>
			<input type="submit"> 
		</form>
	</div>
</body>
</html>