// configure our routes
app.config(function($routeProvider, $locationProvider) {
	$routeProvider

	// route for the home page
		.when('/', {
			controller: 'LoginController',
			templateUrl: 'angular/templates/userLogin.php'
		})

		// route for the about page
		.when('/about-us', {
			controller: 'aboutController',
			templateUrl: 'angular/templates/aboutUs.php'
		})

		// route for the sign up page
		.when('/sign-up', {
			controller: 'signupController',
			templateUrl: 'angular/templates/signUp.php'
		})

		// route for the player profile page
		.when('/player-profile/:id', {
			controller: 'playerController',
			templateUrl: 'angular/templates/playerProfile.php'
		})

		.when('/player-profile/', {
			controller: 'playerController',
			templateUrl: 'angular/templates/playerProfile.php'
		})

		.when('/schedule/:id', {
			controller: 'playerController',
			templateUrl: 'angular/templates/playerProfile.php'
		})

		.when('/user/', {
			controller: 'playerController',
			templateUrl: 'angular/templates/user.php'
		})

		// route for the search page
		.when('/search', {
			controller: 'searchController',
			templateUrl: 'angular/templates/search.php'
		})

		// route for the search results page
		.when('/search-results', {
			controller: 'resultsController',
			templateUrl: 'angular/templates/searchResults.php'
		})

		// route for the contact us page
		.when('/contact-us', {
			controller: 'contactController',
			templateUrl: 'angular/templates/contactUs.php'
		})

		// otherwise redirect to home
		.otherwise({
			controller: 'LoginController',
			templateUrl: 'angular/templates/userLogin.php'
		});

	//use the HTML5 History API
	$locationProvider.html5Mode(true);
});