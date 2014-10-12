<?php
/**
 * This class handles Base Controller
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
class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

}