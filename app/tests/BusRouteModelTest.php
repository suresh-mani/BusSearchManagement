<?php
/**
 * This class handles Bus Route Search
 *
 * PHP version 5.4
 *
 * @category   BUS MANAGEMENT
 * @module     APP
 * @subpackage BusRouteModelTest
 * @author     Suresh Mani <suri.bca2009@gmail.com>
 * @copyright  
 * @license    
 * @version    Release: 1.0
 * @link       
 */
class BusRouteModelTest extends TestCase {
    
    /**
     * Sample Bus Route Data
     */
    public function testbusRouteprovider()
    {
        $sampleBusData
            = array("bus_id" => 4,"route_number" => "V-333Z", "location" => "HAL");
        
        $this->assertNotEmpty($sampleBusData);
        
        return $sampleBusData;
    }
    
    /**
     * Verfiy filter bus route functionality
     * 
     * @depends testbusRouteprovider
     * 
     * @return void
     */
    public function testFilterBusRoute(array $sampleBusData)
    {
        /**
         * Search Bus Route
         */
        $location = "HAL";
        
        $this->assertNotEmpty($location);
        
        $this->assertNotNull($location);
        
        $this->assertContainsOnly('string', array($location));
        
        $getBusRoute
            = BusRoute::filterBusRoute($location);
        
        $this->assertNotEmpty($getBusRoute);
        
        $busData = $getBusRoute['0']['attributes'];
                
        $this->assertEquals($sampleBusData, $busData);
    }
}
