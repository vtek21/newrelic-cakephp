<?php

/**
 * Class AppError
 */

class AppError {

    /**
     * handle error
     *
     * @param $code
     * @param $description
     * @param null $file
     * @param null $line
     * @param null $context
     */
    public static function handleError($code, $description, $file = null, $line = null, $context = null) {

        // only apply if newrelic extension is loaded
        if (extension_loaded('newrelic')) {
            newrelic_notice_error($code);
        } else {
            // @todo: perform "default" error handling
        }

	}

}
