<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/all.css" rel="stylesheet">
		<link href="css/base.css" rel="stylesheet">



	</head>
	<body>
		<div class="container">
			  @if (Session::has('flash_message'))



                  <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     {{Session::get ('flash_message')}}
                  </div>
              @endif
			  @yield('content')
		</div>

	    @yield('footer')

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>