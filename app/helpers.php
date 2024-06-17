<?php

function formatDate($dateString, $format = 'Y/m/d')
{
    $date = new DateTime($dateString);
    return $date->format($format);
}