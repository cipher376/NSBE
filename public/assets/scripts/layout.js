//Angular js 1.x
//Author: Alfred Ntiamoah 
//Website: http://natlink.com



var NSB = angular.module('NSB',['ngRoute','ngCookies']);


NSB.config(["$routeProvider",function($routeProvider){

	$routeProvider.when("/",{
		templateUrl:'/',
		controller:'HomeCtrl'
	}).when('/about',{
		templateUrl:'../Partials/about',
		controller:''
	}).when('/contact',{
		templateUrl:'../Partials/contact',
		controller:''
	}).when('/register',{
		templateUrl:'../Partials/register',
		controller:'RegisterCtrl'
	}).when('/gallery',{
		templateUrl:'../Partials/gallery',
		controller:''
	}).when('/accomodation',{
		templateUrl:'../Partials/accomodation',
		controller:''
	}).when('/agenda',{
		templateUrl:'../Partials/agenda',
		controller:''
	}).when('/collegiates',{
		templateUrl:'../Partials/collegiates',
		controller:''
	}).when('/pre-collegiates',{
		templateUrl:'../Partials/precollegiates',
		controller:''
	}).when('/professionals',{
		templateUrl:'../Partials/professionals',
		controller:''
	})
}])

NSB.controller('HomeCtrl',['$scope','$http','$cookies',function($scope,$http,$cookies){
	
	$scope.data = {}
	$scope.data.email = "";
	$scope.data.comment = "";

	$scope.postcomment = function(){
		var query = {
			method:"post",
			url:"../Auth/login",
			data: $.param($scope.data),
			headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
		}
		console.log(query);

		$http(query).then(function(res){
			console.log(res);
		 // alert(res.data);
		 if(res.data == 'success'){
		 	alert("Message sent");
		 } else{
		 	alert("Message not sent");
		 }
		},function(){
			alert("No connection to server")
		})
	}
}]);

NSB.controller('InnerLayoutCtrl',['$scope','$http','$cookies',function($scope,$http,$cookies){
	
}]);

NSB.controller('LoginCtrl',['$scope','$http','$cookies','$location','$window',function($scope,$http,$cookies,$location,$window){
	
	$scope.data = {
		email:'',
		password:'',
		nonce:""
	};

	$scope.login = function(){
		$scope.data.nonce = $("#nonce").val();
		var query = {
			method:"post",
			url:"../Auth/login",
			data: $.param($scope.data),
			headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
		}
		console.log(query);

		$http(query).then(function(res){
			console.log(res);
			
			if(res.data == 'success'){
				//alert( localStorage.returnAddress);

				if(typeof(Storage) !== "undefined") {
					localStorage.isLoggedIn = "True";
					localStorage.email =$scope.data.email ;
					if(localStorage.returnAddress!==""&&localStorage.returnAddress!==undefined)
						$window.location.href = localStorage.returnAddress;
				}else{
					alert("Your browser is outdated, please update or use chrome,firfox, opera, edge")
				}

			} else if(res.data =='refresh'){
				//alert("refreshing");
				window.location.href = "/NSBE/main/login";

			}else if(res.data == "failed"){
				alert("Please check your email and password");
			}
		},function(){
			alert("No connection to server")
		})
	}
}]);

NSB.controller('RegisterCtrl',["$scope","$window","$http",'$cookies', function($scope,$window,$http,$cookies){
	$scope.data = {};
	$scope.data.email='';
	$scope.data.password='';
	$scope.data.fullname = '';
	$scope.data.nsbno='';
	$scope.data.school ='';
	$scope.data.phone='';
	$scope.data.emergencyPhone='';
	$scope.data.needSpecialTreatment='no';
	$scope.data.specialTreatment='';
	$scope.data.accomodation ='';
	$scope.data.paymentMethod='';
	$scope.data.isPhoneMobileMoney='';
	$scope.data.mobileMoneyNo=''
	$scope.data.mobileMoneyReferenceNo='';

	var $accountConfirmDialog = $('#confirm-register');
	$scope.haveAccount =function(){
		$('#confirm-register').css('display','none');
    //Retrieve user information

    //take user to login page

    if(typeof(Storage) !== "undefined") {
    	localStorage.returnAddress="/NSBE/innerlayout/#!/register";
    }else{
    	alert("Your browser is outdated, please update or use chrome,firfox, opera, edge")
    }
    window.location.href="/NSBE/main/login/"

}
$scope.dontHaveAccount = function(){
	$('#confirm-register').css('display','none');
}
   //Show modal to alert the user to signed in to obtained 
   //previously stored information
   if(typeof(Storage) !== "undefined") {
   	if(localStorage.isLoggedIn !== "True"){
   		$('#confirm-register').css('display','block').show(1000);
   	}else{

   		var query = {
   			method:"get",
   			url:"../Auth/getUser?email="+localStorage.email,
   			headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
   		}
   		$http(query).then(function(res){
   			console.log(res);
   				alert(res);
   			if(res.data == 'success'){
   				console.log(res.data);
   				$scope.data.email=localStorage.email;
   				$scope.data.fullname = '';
   				$scope.data.nsbno='';
   				$scope.data.school ='';
   				$scope.data.phone='';
   				$scope.data.emergencyPhone='';
   				$scope.data.needSpecialTreatment='no';
   				$scope.data.specialTreatment='';
   				$scope.data.accomodation ='';
   				$scope.data.paymentMethod='';
   				$scope.data.isPhoneMobileMoney='';
   				$scope.data.mobileMoneyNo=''
   				$scope.data.mobileMoneyReferenceNo='';
   			}
   		},function(){
   			alert("No connection to server")
   		})

   	}
   }else{


   }
   $scope.$watch($scope.data.needSpecialTreatment,function(oldVal,newVal){
   	if(newVal=='no'){
   		$scope.data.specialTreatment = '';
   	}
   })

   $scope.$watch($scope.data.isPhoneMobileMoney,function(oldVal,newVal){
   	if(newVal=='yes'){
   		$scope.data.mobileMoneyNumber = $scope.data.phone;

   	}
   })


   $scope.register = function(){
		//Perform validation
		var data = $scope.data;
		if(data.email==''){
			alert("Please Enter your email");
			return;

		}else if(data.passowrd==''){
			alert("Please Enter your fullname");
			return;

		}else if(data.phone==''){
			alert("Please enter phone number");
			return;
		}else if(data.emergencyPhone==''){
			alert(data.emergencyPhone);
			alert("Please enter  emergency phone number");
			return;
		}
		var query = {
			method:"post",
			url:"../Auth/register",
			data: $.param($scope.data),
			headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
		}
		console.log(query);

		$http(query).then(function(res){
			if(res.data == 'success'){
				alert("Registeration successful");
				$window.location.href = '/';
			}
		},function(){
			alert("No connection to server")
		})
	}
	
	//alert($cookies.isLoggedIn);
	if(typeof(Storage) !== "undefined") {
		if(localStorage.isLoggedIn !== "True"){
			$('#confirm-register').css('display','block').show(1000);

		}
	}else{


	}


}]);

