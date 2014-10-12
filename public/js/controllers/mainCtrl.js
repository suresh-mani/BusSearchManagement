angular.module('mainCtrl', [])
    .controller('mainController', function($scope, $http, Bus) {
        $scope.searchInput = {};
        $scope.errors = {};
        $scope.loading = true;

        /**
         * Initial Load To Get Buses
         */
        /*Bus.getBusStop().success(function(data) { alert(data)
            $scope.stopDetails = data;
            $scope.loading = false;
        });*/

        /*
         * Function handle to search buses near an area
         */
        $scope.searchBusRoute = function() { 
            $scope.loading = true;
           
            Bus.searchResult($scope.searchInput.q).success(function(getData) {
                $scope.busDetails = getData;
                $scope.loading = false;
            }).error(function(data) {
                console.log(data);
            });
        };
        
        /*
         * Function handle to get stop details by bus id
         */
        $scope.searchBusStop = function(busId) { 
            Bus.getBusStop(busId).success(function(getStopData) {
                lightbox_open();
                $scope.stopDetails = getStopData;
                $scope.loading = false;
            }).error(function(data) {
                console.log(data);
            });
        };
    });
