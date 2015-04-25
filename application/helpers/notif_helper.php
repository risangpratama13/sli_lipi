<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('getExtension')) {

    function notif_category($category) {
        switch ($category) {
            case 1:
            case 2:
            case 4:
                $iclass = "fa fa-users bg-aqua";
                break;
            case 3:
                $iclass = "ion ion-ios7-people bg-yellow";
                break;
            case 5:
                $iclass = "fa fa-money bg-aqua";
                break;
            case 6:
                $iclass = "fa fa-money bg-green";
                break;
            case 7:
                $iclass = "fa fa-money bg-red";
                break;
            case 8:
                $iclass = "fa fa-book bg-aqua";
                break;
            case 9:
                $iclass = "fa fa-book bg-green";
                break;
            case 10:
                $iclass = "fa fa-book bg-red";
                break;
            case 11:
                $iclass = "fa fa-flag-checkered";
                break;
        }
        return $iclass;
    }

}