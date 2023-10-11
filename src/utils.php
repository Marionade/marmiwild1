<?php
function setPos(int $value) : int {
    if ($value < 0) {
        return 0;
    }
    return $value;
}