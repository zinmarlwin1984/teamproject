	<ul class="nav nav-pills nav-stacked">
		<li class="{{ active_check('backend/home') }}"><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
		<li class="{{ active_check('backend/roles') }}"><a href="{{ route('roles.index') }}"><span class="glyphicon glyphicon-bishop" aria-hidden="true"></span> Roles</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User</a></li>
	</ul>