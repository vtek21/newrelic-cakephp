<?php

// configure cakephp error handler to use NewRelicError
Configure::write('Error.handler', 'AppError::handleError');

// use NewRelicError library
App::uses('AppError', 'NewRelic.Lib');


