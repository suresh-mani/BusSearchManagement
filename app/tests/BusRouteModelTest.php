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
     * Verfiy filter bus route functionality
     * 
     * @return void
     */
    public function testFilterBusRoute()
    {
        $busObj = BusRoute::filterBusRoute("HAL");
        
        // If bus object empty
        $this->assertFalse($busObj);
  
        $this->assertTrue($busObj);
    }
}
