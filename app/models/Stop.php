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
    
    /**
     * Function to get bus stop by bus id
     * 
     * @param int $busId
     * 
     * @return object 
     */
    public static function findBusStopByBusId($busId)
    {
        $object = DB::table('stops')
            ->join('timetable', 'stops.stop_id', '=', 'timetable.stop_id')
            ->where('stops.bus_id', '=', $busId)
            ->select('stops.address', 'timetable.arrival_time')
            ->orderBy('timetable.arrival_time', 'desc')
            ->get();
        
        return $object;
    }
}