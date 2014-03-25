<?php

/**
 * Class AppError
 */

class AppError
{

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
        newrelic_notice_error($code);

        return ErrorHandler::handleError(
            $code,
            $description,
            $file,
            $line,
            $context
        );
    }

    /**
     * handle exception
     *
     * @param $error
     */
    public static function handleException($error) {
        newrelic_notice_error($error->getMessage(), $error);

        return ErrorHandler::handleException(
            $error
        );
    }
}
