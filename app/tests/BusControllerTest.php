<?php
/**
 * This class handles Bus Search Unit Test
 *
 * PHP version 5.4
 *
 * @category   BUS MANAGEMENT
 * @module     APP
 * @subpackage BusControllerTest
 * @author     Suresh Mani <suri.bca2009@gmail.com>
 * @copyright  
 * @license    
 * @version    Release: 1.0
 * @link       
 */

class BusControllerTest extends TestCase {
    
    /**
     * A Bus Route Search Functionality Test
     * 
     * @return void
     */
    public function testSearchResult() {
        
        $location = "HAL";
                
        $this->assertNotEmpty($location);
        
        $this->assertNotNull($location);
        
        $this->assertContainsOnly('string', array($location));
        
        $this->client->request('GET', 'api/search/'.$location);
        
        $this->assertEquals(200, $this->client->getResponse()->isOk());
        
        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }
    
    /**
     * Get Bus Stop Functionality Test
     * 
     * @return void
     */
    public function testGetBusStop() {
        
        $busId = 2;
        
        $this->assertNotEmpty($busId);
        
        $this->assertNotNull($busId);
        
        $this->assertContainsOnly('int', array($busId));
        
        $this->client->request('GET', 'api/getStop/'.$busId);
        
        $this->assertEquals(200, $this->client->getResponse()->isOk());

        $this->assertTrue($this->client->getResponse()->isOk()); 
    }
}