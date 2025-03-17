<?php

namespace App\Base;

final class Enqueue
{

    /**
     * @var string|null
     */
    public $namespace = null;

    public function __construct()
    {
        $current_theme = wp_get_theme();
        $this->namespace = $current_theme->get( 'TextDomain' );;
        add_action('wp_enqueue_scripts', [$this, 'enqueueStyles']);
        add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
        add_action('admin_enqueue_scripts', [$this, 'adminStyles']);
        add_action('admin_enqueue_scripts', [$this, 'adminScripts']);
    }

    /**
     * Enqueue public styles
     *
     * @return void
     */
    public function enqueueStyles(): void
    {
        /*$style_asset = include get_parent_theme_file_path('assets/webpack-dist/css/main.asset.php');

        wp_enqueue_style(
            $this->namespace . '-main',
            get_theme_file_uri('assets/webpack-dist/css/main.css'),
            $style_asset['dependencies'],
            $style_asset['version']);*/

        wp_enqueue_style(
            $this->namespace . '-style',
            get_theme_file_uri('src/style.css'),
            [],
            2);

        $this->registerStyles();
    }

    /**
     * Enqueue public scripts
     *
     * @return void
     */
    public function enqueueScripts(): void
    {
        /*$script_asset = include get_parent_theme_file_path('assets/webpack-dist/js/main.asset.php');

        wp_enqueue_script(
            $this->namespace . '-main',
            get_parent_theme_file_uri('assets/webpack-dist/js/main.js'),
            ['jquery'],
            $script_asset['version'],
        );*/

        wp_enqueue_script(
            $this->namespace . '-popper',
            get_template_directory_uri() .'/src/src/js/popper.min.js',
            ['jquery'],
            1,
            [
                'in_footer' => true,
                'strategy'  => 'async',
            ]
        );

        wp_enqueue_script(
            $this->namespace . '-bootstrap',
            get_theme_file_uri('/src/src/js/bootstrap.min.js'),
            ['jquery'],
            1,
            [
                'in_footer' => true,
                'strategy'  => 'async',
            ]
        );

        wp_enqueue_script(
            $this->namespace . '-bundle',
            get_theme_file_uri('/src/js/uza.bundle.js'),
            ['jquery'],
            1,
            [
                'in_footer' => true,
                'strategy'  => 'async',
            ]
        );

        wp_enqueue_script(
            $this->namespace . '-main',
            get_theme_file_uri('/src/js/default-assets/active.js'),
            ['jquery'],
            1,
            [
                'in_footer' => true,
                'strategy'  => 'async',
            ]
        );

        wp_enqueue_script(
            $this->namespace . '-classynav',
            get_theme_file_uri('/src/js/default-assets/classynav.js'),
            ['jquery'],
            1,
            [
                'in_footer' => true,
                'strategy'  => 'async',
            ]
        );


        wp_localize_script( $this->namespace . '-main', 'themeLocalize',
            [
                'ajax_url' 	=> admin_url( 'admin-ajax.php' ),
            ]
        );

        $this->registerScripts();
    }

    /**
     * Enqueue admin styles
     *
     * @return void
     */
    public function adminStyles(): void
    {
        $style_asset = include get_parent_theme_file_path('assets/webpack-dist/css/admin.asset.php');

        wp_enqueue_style(
            $this->namespace . '-admin',
            get_parent_theme_file_uri('assets/webpack-dist/css/admin.css'),
            $style_asset['dependencies'],
            $style_asset['version'],
        );

        $this->registerStyles();
    }


    /**
     * Enqueue admin scripts
     *
     * @return void
     */
    public function adminScripts() {
        $script_asset = include get_parent_theme_file_path('assets/webpack-dist/js/admin.asset.php');

        wp_enqueue_script(
            $this->namespace . '-admin',
            get_parent_theme_file_uri('assets/webpack-dist/js/admin.js'),
            ['jquery'],
            $script_asset['version'],
        );
    }

    /**
     * Registering swiper styles for connection when using a block
     *
     * @return void
     */
    public function registerStyles(): void
    {

    }

    /**
     * Registering swiper scripts for connection when using a block
     *
     * @return void
     */
    public function registerScripts(): void
    {

    }
}