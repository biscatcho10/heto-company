<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

if (!function_exists("gallery")) {
    function gallery($filename)
    {
        return asset("gallery/{$filename}");
    }
}
if (!function_exists('areActiveRoutes')) {
    function areActiveRoutes(array $routes, $output = "active")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
            if (str_contains($route, "*")) {
                $params = explode(".", $route);
                $currentRouteParams = explode(".", Route::currentRouteName());
                if ($params[0] == $currentRouteParams[0] && $params[1] == '*') return $output;
            }
        }
    }
}

if (!function_exists("withUpload")) {
    function withUpload(array $cast)
    {
        return array_merge($cast, ["upload_id" => "required"]);
    }
}

if (!function_exists("messageUpload")) {
    /**
     * @return array
     */
    function messageUpload()
    {
        return ['upload_id.required' => __("validation.upload_required")];
    }
}

if (!function_exists("title")) {
    /**
     * @param string $title
     * @return string
     */
    function title($title = ""): string
    {
        if (isset($title) && $title != "") {
            return env("SITE_NAME", "Heto Admin") . " | " . $title;
        }
        else {
            $routeArray = app('request')->route()->getAction();
            $controllerAction = class_basename($routeArray['controller']);
            list($controller, $action) = explode('@', $controllerAction);
            $controller = str_replace("Controller", "", $controller);
            return env("SITE_NAME", "Heto Admin") . " | " . $controller;
        }
    }
}

if (!function_exists("get_file")) {
    function get_file($id)
    {
        $file = \App\Models\Upload::find($id);
        if (str_contains($file->type, 'image')){
            return asset("gallery/{$file->file_name}");
        }
        else
            return asset("files/{$file->file_name}");

    }
}


function get_file_name($id)
{
    $file = \App\Models\Upload::find($id);
    return $file->file_name;
}
