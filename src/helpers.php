<?php

if (!function_exists('app_path')) {
    /**
     * Get the path to the application folder.
     *
     * @param  string  $path
     * @return string
     */
    function app_path($path = null) {
        return app('path').($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}

if (!function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * @param  string  $path
     * @return string
     */
    function config_path($path = null) {
        return base_path('config').($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}

if (!function_exists('public_path')) {
    /**
     * Get the path to the public folder.
     *
     * @param  string  $path
     * @return string
     */
    function public_path($path = null) {
        return base_path('public').($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}