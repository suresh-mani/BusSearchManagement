<?php
/**
 * This class handles Bus Route
 *
 * PHP version 5.4
 *
 * @category   BUS MANAGEMENT
 * @module     APP
 * @subpackage Route
 * @author     Suresh Mani <suri.bca2009@gmail.com>
 * @copyright  
 * @license    
 * @version    Release: 1.0
 * @link       
 */

class BusRoute extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bus_route';

    /**
     * Whether or not to enable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;
    
    /**
     * Function To Get Bus Route List
     * 
     * @param string $keyword Bus Route Search Content
     * 
     * @return object $busRouteObj  Bus Route List
     */
    public static function filterBusRoute($keyword)
    {
        return BusRoute::where('location', 'LIKE', $keyword.'%')
                ->select('bus_id', 'route_number', 'location')
                ->get();
    }
}