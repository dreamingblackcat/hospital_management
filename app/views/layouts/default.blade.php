<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hospital Management | Sign in</title>		
	{{ Bootstrap::css('local', ['type' => 'text/css']);}}
	{{ HTML::style('assets/css/font-awesome.min.css'); }}
<!-- 	{{ HTML::style('assets/css/bootstrap-theme.min.css'); }}
 -->	{{ HTML::style('assets/css/log_in_page.css'); }}
</head>
<body class="bgcolor">
	<div class="alc">
		<img src="assets/img/logo.png" alt="">	
	</div>
	<div class="container panel panel-default">
		<div class="panel-body">
				@if(Session::has('flash_message'))
				<div class="alert alert-warning">{{Session::get('flash_message')}}</div>
				@endif
				@yield('content')	
		</div>
	</div>
	<div class="alc">
		Power By <a href="http://www.awitd.com">AWITD co.ltd</a>
	</div>
	{{ Bootstrap::js('local', ['type' => 'text/javascript']); }}
</body>
</html>