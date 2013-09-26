<?php

/**
 * Class AppException
 */

class AppException
{

    /**
     * handle exception
     *
     * @param $error
     */
    public static function handleException($error) {

        // only apply if newrelic extension is loaded
        if (extension_loaded('newrelic')) {
            newrelic_notice_error($error->getMessage(), $error);
        } else {
            // @todo: perform "default" exception handling
        }

    }

}