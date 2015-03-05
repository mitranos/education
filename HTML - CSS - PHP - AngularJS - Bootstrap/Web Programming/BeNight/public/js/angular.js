var benightApp = angular.module('benightApp', []);

/*
benightApp.controller('WishlistCtrl', ['$scope', function ($scope) {
        $scope.greetMe = 'World';
      }]);
*/

benightApp.controller('WishlistCtrl', function($scope , $http) {
	var eventInWishlist = false;
	var eventId = $('#heart').attr("event-id");
	$http.get('/BeNight/wishlist/checkWishlistAjax/' + eventId).
    	success(function(data, status, headers, config) {
			if(data){
      			$('#heart').removeClass('glyphicon-heart-empty').addClass('glyphicon-heart');
      			//$.growl(data,{type: 'success',z_index: 1050});
				eventInWishlist = true;
			}
    	}).
    	error(function(data, status, headers, config) {
     		// log error
    });


  $scope.event = function() {
	$scope.flag = true;
	if(eventInWishlist){
	$http.get('/BeNight/wishlist/removeWishlistAjax/' + eventId).
    	success(function(data, status, headers, config) {
			if(data){
      			$('#heart').removeClass('glyphicon-heart').addClass('glyphicon-heart-empty');
      			$.growl("Event Removed from your Wishlist",{
					type: 'success',
					z_index: 1050
				});
				eventInWishlist = false;
				$scope.flag = false;
			}
    	}).
    	error(function(data, status, headers, config) {
     		// log error
			$scope.flag = false;
    });
	}else{
		$http.get('/BeNight/wishlist/addWishlistAjax/' + eventId).
    	success(function(data, status, headers, config) {
			if(data){
      			$('#heart').removeClass('glyphicon-heart-empty').addClass('glyphicon-heart');
      			$.growl("Event Added to your wishlist",{
					type: 'success',
					z_index: 1050
				});
				eventInWishlist = true;
				$scope.flag = false;
			}
    	}).
    	error(function(data, status, headers, config) {
     		// log error
			$scope.flag = false;
    });
	}
  }
});


/*
angular.module('benightApp')
.controller('MainController', ['$scope', function($scope) {
      $scope.dyn = 'FitText';
    }]);
/*
.controller('signinFormCtrl', function($scope, $alert,  $http) {
	
	// create a blank object to hold our form information
	// $scope will allow this to pass between controller and view
	$scope.formData = {};
	// process the form
	$scope.processForm = function() {
		console.log($scope.formData);
		$http({
	        method  : 'POST',
	        url     : 'require/top.php',
	        data    : $.param($scope.formData),  // pass in data as strings
	        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
			  // set the headers so angular passing info as form data (not request payload)
	    })
	        .success(function(data) {
	           //console.log(data);
	            if (!data.success) {
	            	// if not successful, bind errors to error variables
	                //$scope.errorName = data.errors.user_name;
		            //$scope.errorSuperhero = data.errors.user_password;
					//addAlert();
					//window.location.href = data.redirect;
	            } else {
	            	// if successful, bind success message to message
	                //$scope.message = data.message;
					addAlert();
	            }
	        });
	};
	
	
	$scope.addAlert = function() {
    var myAlert = $alert({title: 'Error: ', 
  						content: 'Best check yo self, you\'re not looking too good.',
						container : '#alerts-container',
						type: 'error',
						dismissable: false,
						duration: 5,
						animation:'am-fade-and-scale', 
						show: true});
  };
});*/
