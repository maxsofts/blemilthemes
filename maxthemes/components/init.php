<?php
namespace max_themes\components;

use max_themes\components\frontend\enqueue;
use max_themes\components\backend\menu;

class init
{
    public function __construct()
    {
        $this->init_frontend();
        $this->init_backend();
    }

    public function init_frontend()
    {
        /**
         * Style
         */
        new enqueue();
    }

    public function init_backend()
    {
        /*
         * menu
         */
        new menu();
    }
}