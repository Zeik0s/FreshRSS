<?php
class Minz_ControllerNotExistException extends Minz_Exception {
	public function __construct ($code = self::ERROR) {
		$message = 'Controller not found!';
		parent::__construct ($message, $code);
	}
}
