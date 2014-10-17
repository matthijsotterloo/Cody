'use strict';

var app = angular.module('app', ['ngRoute']);

app.config(['$locationProvider', function ($locationProvider) {
    $locationProvider.html5Mode(false).hashPrefix('!');
}]);

app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: '/partials/index.html',
            controller: 'DefaultController'
        })
        .when('/game/draw', {
            templateUrl: '/partials/game/draw.html',
            controller: 'GameStartController'
        })
        .otherwise({
            template: 'Not found!'
        });
}]);

app.controller('DefaultController', [
    '$scope',
    '$http',
    function($scope, $http) {
}]);

app.controller('GameDrawController', [
    '$scope',
    '$http',
    function($scope, $http) {
    
    document.getElementById('sketch').toDataURL();
}]);