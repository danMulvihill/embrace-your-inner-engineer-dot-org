(function (window){
	
var app = window.app || {};

var app = angular.module("timelineApp", ['ngRoute']);

app.config(function($routeProvider){
   $routeProvider
   .when('/', {
       templateUrl: 'app/views/timeline.html',
       controller: 'timelineCtrl'
        })
     .when('/timeline/:num', {
       templateUrl: 'app/views/observers.html',
       controller: 'timeCtrl'
        });
   });

app.controller("timelineCtrl", ['$scope','$log', '$http', function ($scope,$log, $http) {
    'use strict';
    $scope.title = "Timeline";
    $scope.description = "History of the Internet, computers, and other related technologies";
	//$scope.selectItems = function (item) {
	//return item.type == "Internet";};
    $scope.chInt = true;
	$scope.chNet = true;
    $scope.chHard = true;
    $scope.chElectric = true;
    $scope.chCPU = true;
	
	$http.get("data/timeline.json")
        .success(function (result) {
            $scope.items = result;
            $log.log($scope.items);
        }).error(function (d, s) {
            $log.log(d);
        });
	
		
		//$scope.items=items;
}]);

app.controller("timeCtrl", ['$scope', '$log','$http','$routeParams', function($scope, $log,$http, $routeParams){
       
   $scope.num = $routeParams.num || 3;
   
    $scope.sortBy = "year[0]";
    $scope.reverse = false;
    $scope.doSort = function (propName) {
        $scope.sortBy = propName;
        $scope.reverse = !$scope.reverse;
    };
    
    $http.get("data/solar.json")
        .success(function (result) {
            $scope.items = result;
        });
    
}]);

})(window);