<?php

// Use this plugin only if New Relic is intalled
if(extension_loaded('newrelic')) {
	// configure cakephp error handler to use NewRelicError
	Configure::write('Error.handler', 'AppError::handleError');
	Configure::write('Exception.handler', 'AppException::handleError');

	// lazy load AppError and AppException class
	App::uses('AppError', 'Lib');
	App::uses('AppException', 'Lib');
}