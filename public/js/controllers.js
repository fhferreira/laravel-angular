'use strict';

/* Controllers */

function postsListCtrl($scope, $http) {
	$http.get('posts').success(function(data) {
		$scope.posts = data;
	});
}

function postDetailCtrl($scope, $routeParams, $http, $location){
	$http.get('posts/'+ $routeParams.postId).success(function(data) {
		$scope.post = data;
	}).
	error(function(data){
		//redirect to index page if record not found eg. url changed
		$location.path("/");
	})
}