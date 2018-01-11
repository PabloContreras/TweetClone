<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--Responsive-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!--style-->
    <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet" />  
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<title>Tweet Clone</title>
</head>
<body>
	@include('partials.navbar')
	<div class="container">
		<div class="row">
			@section('body')
				@show
		</div>
	</div>
	<br>
	@include('partials.footer')
	<!--Bootstrap-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>