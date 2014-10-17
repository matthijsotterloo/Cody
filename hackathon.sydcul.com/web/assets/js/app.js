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
        .otherwise({
            template: 'Not found!'
        });
}]);

app.controller('DefaultController', [
    '$scope',
    '$http',
    function($scope, $http) {
}]);