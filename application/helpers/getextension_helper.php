<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('getExtension')) {

    function getExtension($file_type) {        
        switch ($file_type) {
            case 'image/jpeg':
                $ext = '.jpg';
                break;
            case 'image/png':
                $ext = '.png';
                break;
            case 'image/gif':
                $ext = '.gif';
                break;
            default:
                $ext = '.jpg';
                break;
        }
        return $ext;        
    }
}

?>