<?php
namespace max_themes\components\frontend;

class enqueue
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'addStyles'));
        add_action('wp_enqueue_scripts', array($this, 'addScripts'));
    }

    public function addStyles()
    {
        wp_enqueue_style('material-icons', 'http://fonts.googleapis.com/icon?family=Material+Icons');

        wp_enqueue_style('material-css', MAXTHEMES_URI_ASSET . 'materialize/css/materialize.min.css');

        wp_enqueue_style('font-awesome', MAXTHEMES_URI_ASSET . 'font-awesome/css/font-awesome.min.css');

        wp_enqueue_style('animate', MAXTHEMES_URI_ASSET . 'animate/animate.min.css');

        wp_enqueue_style('app-css', MAXTHEMES_URI_ASSET . 'blemil/css/blemil.css');


    }

    public function addScripts()
    {
//        wp_enqueue_script('angular', MAXTHEMES_URI_ASSET . 'angular/angular.min.js', array(), '', true);

        wp_enqueue_script('jquery-2.1.1', MAXTHEMES_URI_ASSET . 'blemil/js/jquery-2.1.1.min.js', array(), '', true);

        wp_enqueue_script('materialize', MAXTHEMES_URI_ASSET . 'materialize/js/materialize.min.js', array(), '', true);

        wp_enqueue_script('scripts', MAXTHEMES_URI_ASSET . 'blemil/js/jquery.blemil.js', array(), '', true);
//        wp_enqueue_script('research', MAXTHEMES_URI_ASSET . 'blemil/js/research.js', array(), '', true);
    }

}
