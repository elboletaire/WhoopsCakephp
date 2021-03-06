<?php
namespace WhoopsCakephp\Error;

use Cake\Core\Configure;
use Cake\Error\BaseErrorHandler;

class WhoopsErrorHandler extends BaseErrorHandler {

	protected function _displayError($error, $debug) {
		$Whoops = new \Whoops\Run();
		$Whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
		return $Whoops->handleError(Configure::read('Error.errorLevel'), $error);
	}

	protected function _displayException($exception) {
		$Whoops = new \Whoops\Run();
		$Whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
		return $Whoops->handleException($exception);
	}

}
