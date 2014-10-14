<?php
/**
 * This class handles Generic Unit Test Functionality
 *
 * PHP version 5.4
 *
 * @category   BUS MANAGEMENT
 * @module     APP
 * @subpackage TestCase
 * @author     Suresh Mani <suri.bca2009@gmail.com>
 * @copyright  
 * @license    
 * @version    Release: 1.0
 * @link       
 */
class TestCase extends Illuminate\Foundation\Testing\TestCase {

    /**
     * Default preparation for each test
     */
    public function setUp()
    {
        parent::setUp();
        
        $this->prepareForTests();
    }
    
    /**
     * Creates the application.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication()
    {
        $unitTesting = true;

        $testEnvironment = 'testing';

        return require __DIR__.'/../../bootstrap/start.php';
    }
    
    /**
     * Migrate the database
     */
    private function prepareForTests()
    {
        Artisan::call('migrate');
    }
}
