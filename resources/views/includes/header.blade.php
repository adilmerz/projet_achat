
<nav class="navbar navbar-expand-md navbar-light bg-transparent">
  <div class="bloc_logo col-2">
	<a href="./" class="navbar-brand text-primary"><i class="fa fa-cube"></i> ACHAT<b>COM</b></a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
  </button>
  </div>
  <!--nav Services -->
  <div id="menu-services" class="col-7">
      <!-- if connecter -->
      <!-- services menu-->
      @yield('services')
</div>

	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start col-5" >
		 <!-- if not connected -->
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="dropdown user-action btn  small btn-primary  text-gray text-uppercase text-decoration-none">
                    @php
                    $session = session('user');
                    @endphp

                    <i class="fa fa-user-circle mr-1"></i>{{$session['nom']}}</a>
				<div class="dropdown-menu">
					<a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
					<div class="dropdown-divider"></div>
					<a href="{{route('auth.logout')}}" class="dropdown-item"><i class="fa fa-sign-out"></i> Déconnexion</a>
				</div>
			</div>

	</div>
</nav>

