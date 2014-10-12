angular.module('busService', [])
    .factory('Bus', function($http) {
        return {
            get : function() {
                return $http.get('api/getBuses');
            },
            show : function(id) {
                return $http.get('api/getBuses/' + id);
            },
            searchResult : function(keyword) {
                return $http.get('api/search/' + keyword);
            },
            getBusStop : function(busId) {
                return $http.get('api/getStop/' + busId);
            }
        }
    });