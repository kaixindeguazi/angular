# angular
angular初步使用...

//创建一个模块
var app = angular.module('App',[]);

//为这个模块创建一个控制器
app.controller('WorldController',['$scope',function($scope){
	//数据
	$scope.user = {
		username: '',
		password: ''
	};

	//行为数据
	$scope.login = function{
		//因为数据的变化是双向同步，所以界面上的值会同步到$scope.user上
		console.log($scope.user);
	}	
}])

//angular 基本不用操作DOM，如果必要，可以使用angular提供的jqlite
//angular.element('#div');