var module=angular.module('Myapp',[]);
module.controller('PhongbanCtrl',function($scope,$http){
$http.get('api/phongban').then(function (response){
$scope.phongban= response.data;
});
});
module.controller('RepostCtrl',function($scope, $http){
	$http.get('api/repost').then(function (response){
$scope.repost=response.data;
$scope.countrepost=response.data.length;
	});
});
module.controller('RepostdetailCtrl',function($scope, $http, $stateParams){
		var currentId = $stateParams.id;
	$http.get('api/viewRepost'+currentId).then(function (response){
$scope.repost=response.data;
$scope.countrepost=response.data.length;
	});
});