# angular
angular初步使用...

创建一个模块
var app = angular.module('App',[]);

为这个模块创建一个控制器
app.controller('WorldController',['$scope',function($scope){
	$scope.user = {
		username: '',
		password: ''
	};	
}])