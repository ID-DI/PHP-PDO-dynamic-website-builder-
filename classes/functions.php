<?php

function setOldValue($key, $value)
{
    $_SESSION["typed_$key"] = $value;
}

function old($key)
{
    if (isset($_SESSION["typed_$key"])) {
        $oldValue = $_SESSION["typed_$key"];
        unset($_SESSION["typed_$key"]);
        return $oldValue;
    }

    return "";
}