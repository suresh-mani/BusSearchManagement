<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Bus Search Management System</title>

        <!-- CSS -->
        <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bms-main.css">
        <link rel="stylesheet" href="/css/popup.css">

        <!-- JS -->
        <script src="/js/lib/jquery/jquery-1.10.2.min.js"></script>
        <script src="/js/lib/angularjs/angular.js"></script>
        <script src="/js/lib/jquery/popup.js"></script>
        
        <!-- ANGULAR -->
        <script src="js/controllers/mainCtrl.js"></script>
        <script src="js/services/busService.js"></script>
        <script src="js/app.js"></script>
    </head>
    
    <body class="container" ng-app="busApp" ng-controller="mainController">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h2>Bus Search Management System</h2>
            </div>

            <form ng-submit="searchBusRoute()">
                <div class="form-group">
                    <input type="text" class="bms-width350 form-control input-sm" name="q" ng-model="searchInput.q" placeholder="Search Bus Location" autocomplete="off" />
                    <button title="Search" type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>

            <div class="bms-border-bottom" ng-hide="loading" ng-repeat="busDetail in busDetails">
                <div>
                    <span class="bms-padding-right20 bms-padding-bottom10">
                        <img src="/images/bus.png">
                        Route no: {{ busDetail.route_number }}
                    </span>
                    <span class="bms-padding-right20 bms-padding-bottom5">
                        Location : {{ busDetail.location }}
                    </span>
                </div>
                <div class="bms-padding-right20 bms-padding-bottom10">
                    <span ng-click="searchBusStop(busDetail.bus_id)" class="bms-bus_stop" title="Click Here">
                        <img src="/images/stop.png">
                        Bus Stops
                    </span>
                </div>
            </div>
        </div>
        
        <div id="light" ng-hide="loading">
            <table id="routes" cellspacing="0" cellpadding="0" width="100%">
                <tbody>
                    <tr>
                    <td id="routes-result-header">
                        <span class="trip-route-label">
                            <img src="/images/bus.png" alt="" align="absmiddle">
                        </span>Route No. 335M
                    </td>
                    </tr>
                    <tr class="odd">
                        <td colspan="2">
                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tr ng-repeat="stopDetail in stopDetails">
                                    <td width="21%">
                                        <ul class="liststops">
                                            <li>
                                                <span id='busstop_name'>
                                                    {{ stopDetail.address }}
                                                </span>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="fade" onClick="lightbox_close();"></div>
        
    </body>
</html>

