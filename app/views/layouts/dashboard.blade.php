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
 -->	{{ HTML::style('assets/css/cmsh.css'); }}
</head>
<body>
	<div class="main-container container-fluid">
		<div class="sidebar cm-sidebar" id="sidebar">
			<ul class="nav nav-list">
				<li class="{{set_active('people')}} row">
					<div class="col-sm-6 alc">
						<i class="fa fa-dashboard fa-2x"></i>
					</div>
					<div class="col-sm-6">
						<a href="{{ URL::route('people.index')}}">
							
							<span class="menu-text"> People </span>
						</a>
					</div>
				</li>

				<li class="{{set_active('ExpertiseAreas')}} row">
					<div class="col-sm-6 alc">
						<i class="fa fa-group fa-2x"></i>
					</div>
					<div class="col-sm-6">
						<a href="{{ URL::route('ExpertiseAreas.index')}}">
							
							<span class="menu-text"> ExpertiseAreas </span>
						</a>
					</div>
				</li>
				<li class="{{set_active('doctors')}} row">
					<div class="col-sm-6 alc">
						<i class="fa fa-eye fa-2x"></i>
					</div>
					<div class="col-sm-6">
						<a href="{{ URL::route('doctors.index')}}">
							
							<span class="menu-text"> Doctors </span>
						</a>
					</div>
				</li>
				<li class="{{set_active('patients')}} row">
					<div class="col-sm-6 alc">
						<i class="fa fa-user fa-2x"></i>
					</div>
					<div class="col-sm-6">
						<a href="{{ URL::route('people.index')}}">
							
							<span class="menu-text"> Patients </span>
						</a>
					</div>
				</li>
				
			</ul><!--/.nav-list-->

			<div class="sidebar-collapse" id="sidebar-collapse">
				<i class="icon-double-angle-left"></i>
			</div>
		</div>
		<div class="content">
			<div class="col-md-12">
				<div>
					@yield('heading')
				</div>
				<div class="panel panel-default">
				  <div class="panel-heading cm-panel-heading">
				  	@yield('sub_heading')
				  </div>
				  <div class="panel-body cm-panel-color">
				    @yield('content')
				  </div>
				</div>
			</div>
			
		</div>
	</div>
	{{ Bootstrap::js('local', ['type' => 'text/javascript']); }}
	{{ HTML::script('assets/js/hospital.js', ['type' => 'text/javascript']); }}
</body>
</html>

