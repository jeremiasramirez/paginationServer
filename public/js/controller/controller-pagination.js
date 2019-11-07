app.controller("pagination", ["$scope", "$http", function($scope, $http){

    $scope.buttoner = [];
    $scope.toFirst = function(){

    };

    $scope.toLast = function(){

    };

    $scope.setNumPage = function(num){
        // num = num * 5
        alert(num);
    };



    $scope.countries = [];
     $http({

         method: "get",
         url: "php/controller/controller-countries.php"

     }).then((res)=>{

         console.log(res.data);
         $scope.countries = res.data.data;
         for(let i=1;i<=res.data.buttons-2; i++){
             $scope.buttoner += [i];
         }


     })


}]);