app.controller("pagination", ["$scope", "$http", function($scope, $http){

    $scope.buttoner = [];
    $scope.numPagination = 0;
    $scope.toFirst = function(){
        requested()
    };


    $scope.countries = [];
    $scope.setNumPage = function(num){
        num = parseInt(num);
        $scope.numPagination = num;

        requested(num)



    };
    $scope.sizeButton = 0;
    function requested (numPagination=0){

        $http({

            method: "post",
            url: "php/controller/controller-countries.php?numpagination="+ numPagination,
            header: {
                "Content-Type" : "application/www-x-form-urlenconded"
            }

        }).then((res)=>{

            $scope.sizeButton = res.data.buttons;

            $scope.countries = res.data.data;
            for(let i=1;i<$scope.sizeButton; i++){
                $scope.buttoner += [i];
            }


        })
    }
    $scope.toLast = function(){

    };
requested(0)


}]);