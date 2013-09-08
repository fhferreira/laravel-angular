'use strict';


// Declare app level module which depends on filters, and services
angular.module('Blog', []).
  config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/', {templateUrl: 'partials/partial_post_list.html', controller: 'postsListCtrl'});
    $routeProvider.when('/posts/:postId', {templateUrl: 'partials/partial_post_details.html', controller: 'postDetailCtrl'});
    $routeProvider.otherwise({redirectTo: '/'});
  }]);
