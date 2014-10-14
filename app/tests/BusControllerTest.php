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
        $this->client->request('GET', 'api/search/HAL');
        
        $this->assertTrue($this->client->getResponse()->isOk()); 

        $this->assertResponseOk();
    }
    
    /**
     * Get Bus Stop Functionality Test
     * 
     * @return void
     */
    public function testGetBusStop() {
        $this->client->request('GET', 'api/getStop/4');

        $this->assertTrue($this->client->getResponse()->isOk()); 
        
        $this->assertResponseOk();
    }
}