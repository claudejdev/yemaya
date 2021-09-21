<?php

class Toolbox
{
    // Assignation de classes Bootstrap
    public const COLOR_RED = 'alert-danger';
    public const COLOR_ORANGE = 'alert-warning';
    public const COLOR_GREEN = 'alert-success';

    public static function addAlertMessages($message, $type)
    {
        $_SESSION['alert'][] = [
            'message' => $message,
            'type' => $type,
        ];
    }
}
