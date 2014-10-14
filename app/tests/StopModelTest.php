<?php
/**
 * This class handles Bus Search Unit Test
 *
 * PHP version 5.4
 *
 * @category   BUS MANAGEMENT
 * @module     APP
 * @subpackage StopModelTest
 * @author     Suresh Mani <suri.bca2009@gmail.com>
 * @copyright  
 * @license    
 * @version    Release: 1.0
 * @link       
 */
class StopModelTest extends TestCase {
    /**
     * Verfiy Bus stops arrival time functionality
     * 
     * @return void
     */
    public function testFindBusStopByBusId()
    {
        $stopObj = BusRoute::findBusStopByBusId("1");
        
        // If bus stop object empty
        $this->assertFalse($stopObj);
  
        $this->assertTrue($stopObj);
    }
}
