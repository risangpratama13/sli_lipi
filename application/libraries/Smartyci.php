<?php if ( ! defined('BASEPATH') ) exit( 'No direct script access allowed' );

require_once('application/third_party/Smarty/libs/Smarty.class.php' );

class Smartyci extends Smarty {
    public function __construct() {
        parent::__construct();
        $config =& get_config();
        
        $this->setTemplateDir('application/views');
        $this->setCompileDir('application/third_party/Smarty/templates_c' );
        $this->setConfigDir('application/third_party/Smarty/configs');
        $this->setCacheDir('application/cache');
    }
}