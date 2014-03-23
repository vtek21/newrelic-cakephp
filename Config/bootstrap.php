<?php

// Use this plugin only if New Relic is intalled
if(extension_loaded('newrelic')) {
    // lazy load AppError
    App::import('newrelic-cakephp.Lib', 'AppError');

    // configure cakephp error handler to use NewRelicError
    Configure::write('Error.handler', 'AppError::handleError');
    Configure::write('Exception.handler', 'AppError::handleException');
}