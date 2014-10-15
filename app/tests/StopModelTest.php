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
     * Sample Bus Stop Data
     */
    public function testBusStopProvider()
    {
        $sampleData
            = array("address" => "Newton City","arrival_time" => "10:30:00");
        
        $this->assertNotEmpty($sampleData);
        
        return $sampleData;
    }
    
    /**
     * Verfiy Bus stops Functionality
     * 
     * @depends testBusStopProvider
     * 
     * @return void
     */
    public function testFindBusStopByBusId($sampleData)
    {
        $busId = 1;
        
        $this->assertNotEmpty($busId);
               
        $this->assertNotNull($busId);
        
        $this->assertContainsOnly('int', array($busId));
        
        $getBusStopData
            = Stop::findBusStopByBusId($busId);
        
        $this->assertNotEmpty($getBusStopData);
        
        $busStopData = $getBusStopData->items['0']['attributes'];
        
        $this->assertEquals($sampleData, $busStopData);
    }
}
