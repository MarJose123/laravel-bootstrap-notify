<?php
// config for Marjose/notify
return [
    /*
    |--------------------------------------------------------------------------
    | Notification timeout
    |--------------------------------------------------------------------------
    |
    | Defines the number of seconds during which the notification will be visible.
    |
    */

    'timeout'   => 5000,
        /*
    |--------------------------------------------------------------------------
    | Preset Messages
    |--------------------------------------------------------------------------
    |
    | Define any preset messages here that can be reused.
    | Available model: alert, toast
    |
    */

    'preset-messages' => [
        // An example preset 'user updated' Connectify notification.
        'user-updated' => [
            'message' => 'The user has been updated successfully.',
            'type'    => 'success',
            'icon'    => 'fas fa-thumbs-up fa-3x',
            'model'   => 'alert',
            'title'   => 'User Updated',
        ],
    ],
];
