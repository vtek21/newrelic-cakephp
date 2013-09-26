<?php

// configure cakephp error handler to use NewRelicError
Configure::write('Error.handler', 'AppError::handleError');
Configure::write('Exception.handler', 'AppException::handleError');

// lazy load AppError and AppException class
App::uses('AppError', 'NewRelic.Lib');
App::uses('AppException', 'NewRelic.Lib');


