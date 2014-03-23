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
        newrelic_notice_error($error->getMessage(), $error);
    }

}