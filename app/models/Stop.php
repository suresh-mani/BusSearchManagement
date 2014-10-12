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

class Stop extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'stops';

    /**
     * Whether or not to enable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;
    
    public static function findBusStopByBusId($busId)
    {
       return Stop::where('bus_id', '=', $busId)->get();
    }
}