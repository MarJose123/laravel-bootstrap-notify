<?php

use Marjose\notify\notify;

if (! function_exists('notify')) {
    function notify(string $message = null, string $title = null): notify
    {
        $notify = app('notify');

        if (! is_null($message)) {
            return $notify->success($message, $title);
        }

        return $notify;
    }
}

if (! function_exists('notifyJs')) {
    /**
     * @return string
     */
    function notifyJs(): string
    {
        return '<script type="text/javascript" src="'.asset('vendor/Marjose/laravel-bootstrap-notify/js/notify.js').'"></script>';
    }

    if (! function_exists('notifyCss')) {
        /**
         * @return string
         */
        function notifyCss(): string
        {
            return '<link rel="stylesheet" type="text/css" href="'.asset('vendor/Marjose/laravel-bootstrap-notify/css/app.css').'"/>';
        }
    }
}
