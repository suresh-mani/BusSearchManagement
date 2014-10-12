<?php
/**
 * This class handles Initial Landing Functionality
 *
 * PHP version 5.4
 *
 * @category   BUS MANAGEMENT
 * @module     APP
 * @subpackage BusController
 * @author     Suresh Mani <suri.bca2009@gmail.com>
 * @copyright  
 * @license    
 * @version    Release: 1.0
 * @link       
 */

class BusController extends BaseController 
{

    /**
     * Function use to get all bus route list in json format
     *
     * @return json repsonse
     */
    public function index()
    { 
        return Response::json(BusRoute::get());
    }

    /**
     * Function use to get specific bus route by buse id
     *
     * @param  int  $id bus id
     * 
     * @return json repsonse
     */
    public function show($id)
    {
        return Response::json(BusRoute::where("id","=",$id));
    }

    /**
     * Function use to get bus route near an area
     *
     * @param  string  $keyword search content
     * 
     * @return json repsonse
     */
    public function searchResult($keyword)
    { 
        $busRouteObj
            = BusRoute::filterBusRoute($keyword);
        
        return Response::json($busRouteObj);
    }
    
    /**
     * Function to get bus stop by bus id
     *
     * @param  int  $busId Bus Id
     * 
     * @return json repsonse
     */
    public function getBusStop($busId)
    {
        $stopObject 
            = Stop::findBusStopByBusId($busId);
        
        return Response::json($stopObject);
    }
}