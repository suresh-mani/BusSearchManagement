angular.module('mainCtrl', [])
    .controller('mainController', function($scope, $http, Bus) {
        $scope.searchInput = {};
        $scope.keyword = {};

        /*
         * Function handle to search buses near an area
         */
        $scope.searchBusRoute = function() { 
            Bus.searchResult($scope.searchInput.q).success(function(getData) {
                $scope.busDetails = getData;
                $scope.keyword = $scope.searchInput.q;
            }).error(function(data) {
                console.log(data);
            });
        };
        
        /*
         * Function handle to get stop details by bus id
         */
        $scope.searchBusStop = function(busId,routeNumber) {
            Bus.getBusStop(busId).success(function(getStopData) {
                lightbox_open();
                $scope.stopDetails = getStopData;
                $scope.routeNumber = routeNumber;
            }).error(function(data) {
                console.log(data);
            });
        };
        
        $scope.isEmpy = function(value) {
            console.log(value); 
        }
    });
