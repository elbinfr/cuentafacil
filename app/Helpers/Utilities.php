<?php

/**
 * @return mixed
 */
function currentUserName()
{
    return auth()->user()->employee->fullName();
}