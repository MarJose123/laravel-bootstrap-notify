<?php

use Marjose\notify\notify;

if (! function_exists('notify')) {
    function notify(string $message = null, string $title = null): notify
    {
        $notify = app('notify');

        if (! is_null($message)) {
            switch ($title) {
                case "error":
                    return $notify->error($message, $title);
                case "warning":
                    return $notify->warning($message, $title);
                case "info":
                    return $notify->info($message, $title);
                default:
                    return $notify->success($message, $title);
            }

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
        return '<script type="text/javascript" src="'.asset('vendor/notify/js/notify.js').'"></script>';
    }
}

if (! function_exists('notifyCss')) {
    /**
     * @return string
     */
    function notifyCss(): string
    {
        return '<link rel="stylesheet" type="text/css" href="'.asset('vendor/notify/css/app.css').'"/>';
    }
}
