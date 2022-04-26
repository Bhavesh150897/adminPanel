<?php

/**
 * Write code on Method
 *
 * @return response()
 */
function notificationMsg($type, $message)
{
    \Session::put($type, $message);
}