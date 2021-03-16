var app = angular.module("myapp", []);
app.controller("myCtrl",
function($scope,$http)
{
	
	
	  $scope.data1 = {};
	 
	 $scope.changeEmail=function()
	 {		
    
	
		$http({method: "POST", url:"change-email", data: $scope.data1}).success(function(data){
			if(data.error)
			{
				
				$scope.error_newemail = data.error.msg;
				
			}
		}); 
	 } 
}

);

/* app.controller('myCtrl', function($scope, $http) {
  $http.post("edit-profile/1")
  .then(function(response) {
    $scope.myWelcome = response.data;
  });
}); */