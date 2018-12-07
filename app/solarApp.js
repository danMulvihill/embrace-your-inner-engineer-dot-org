(function (window){
	
var app = window.app || {};

var app = angular.module("astroApp", ['ngRoute']);

app.config(function($routeProvider){
   $routeProvider
   .when('/', {
       templateUrl: 'app/views/planets.html',
       controller: 'astroCtrl'
        })
   .when('/details/', {
       templateUrl: 'app/views/moons.html',
       controller: 'moonCtrl'
        })
    .when('/details/:num', {
       templateUrl: 'app/views/moons.html',
       controller: 'moonCtrl'
        })
     .when('/timeline/:num', {
       templateUrl: 'app/views/observers.html',
       controller: 'timeCtrl'
        });
   });

app.controller("astroCtrl", ['$scope','$log', '$http', function ($scope,$log, $http) {
    'use strict';
    $scope.title = "Planets and other things that go around the Sun";
    $scope.description = "This table was created with the AngularJS framework. Angular is powerful tool that allows you to use front-end web technology and AJAX to pull data from a database or a file on the server (the \"back-end\") and put it on a HTML template.";
    //$scope.selfFilter = inner;
    $scope.calc = 1;
    $scope.calcMiles = function () {
        $scope.calc = 0.62137;
    };
    $scope.sortBy = "distance[1]*distance[0]/2";
    $scope.reverse = false;
    $scope.doSort = function (propName) {
        $scope.sortBy = propName;
        $scope.reverse = !$scope.reverse;
    };
    $scope.handleChange = function (convertVal) {
        //alert(parseFloat(convertVal));
        calc = calc * parseFloat(convertVal);
    };
    $scope.filterIt = function (region) {
        $scope.selfFilter = region;
    };
    $scope.selectItems = function (item) {
        return item.type == "inner rocky planet";
    };
    $scope.chInner = true;
    $scope.chStar = true;
    $scope.chOuter = true;
    $scope.chIcy = true;
    $scope.chAster = true;
    $http.get("data/solar.json")
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

app.controller("moonCtrl", ['$scope', '$log','$http','$routeParams', function($scope, $log,$http, $routeParams){
       
   $scope.num = $routeParams.num || 3;
   $scope.calc = 1;
   $scope.calcMiles = function () {
        $scope.calc = 0.62137;
    };
    $scope.sortBy = "distance[0]";
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