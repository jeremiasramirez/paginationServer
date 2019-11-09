app.config(function($routeProvider){

    $routeProvider
        .when("/", {
            templateUrl: "public/js/view/view-paginationServer.html",
            controller: "pagination"
        })

        .otherwise({
            redirectTo: "/"
        })

});