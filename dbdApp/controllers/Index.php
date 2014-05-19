<?php
/**
 * Index.php :: Index Controller Class File
 *
 * @package dbdMVC
 * @version 1.1
 * @author Don't Blink Design <info@dontblinkdesign.com>
 * @copyright Copyright (c) 2006-2007 by Don't Blink Design
 */

/**
 * dbdMVC Index Sample Controller Class
 * @package dbdMVC
 * @uses dbdController
 */
class Index extends dbdController
{
	protected function init()
	{
		$this->view->addCss("import.css");
	}
	/**
	 * Set a welcome message for the view
	 */
	public function doDefault()
	{
		$this->view->assign("title", "Welcome to ".dbdMVC::getAppName()."!");
		$this->view->assign("ver", dbdMVC::VERSION);
	}
}
?>
