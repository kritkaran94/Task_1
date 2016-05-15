var App = angular.module('myApp', ['ui.bootstrap']);
 function FormController($scope, $http) {
 
 $scope.name = undefined;
 $scope.city = undefined;
 $scope.message = undefined;
 $scope.submitForm = function ()
 {
 console.log("posting data....");
 $http({
 method: 'POST',
 url: '<?php echo base_url(); ?>user/add',
 headers: {'Content-Type': 'application/json'},
 data: JSON.stringify({name: $scope.name,city:$scope.city})
 }).success(function (data) {
 console.log(data);
 $scope.message = data.status;
 });
 }
 }