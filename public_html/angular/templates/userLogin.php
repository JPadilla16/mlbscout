<div class="sfooter-content">

	<!-- header -->
	<header ng-controller="NavController">
		<bootstrap-breakpoint></bootstrap-breakpoint>

		<div class="container">

			<nav class="navbar navbar-inverse">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							  data-target="#bs-example-navbar-collapse-1" aria-expanded="false"
							  ng-click="navCollapsed =!navCollapsed">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">RealTimeScout</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Have an Account? Sign Up</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="well text-center">
						<h1>User Login</h1>
					</div>
				</div>
			</div>
			<!-- main content-->
			<div class="row">
				<div class="col-xs-12">
					<div class="well text-center">
						<form class="form-horizontal well" action="email.php">
							<div class="form-group">
								<label for="Username">Username</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="Username" name="Username" placeholder="Username">
								</div>
							</div>
							<div class="form-group">
								<label for="Password">Password</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="Password" name="Password" placeholder="Password">
								</div>
							</div>
							<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Login</button>
						</form>
					</div>
					r
				</div>
			</div>
		</div>
	</main>
</div>

