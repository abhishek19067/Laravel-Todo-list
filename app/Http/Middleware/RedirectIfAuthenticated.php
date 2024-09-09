<?php
class RedirectIfAuthenticated
{

 
    protected function defaultRedirectUri(): string
    {
        foreach (['dashboard', 'home'] as $uri) {
            if (Route::has($uri)) {
                return route($uri);
            }
        }
 
        $routes = Route::getRoutes()->get('GET');
 
        foreach (['dashboard', 'home'] as $uri) {
            if (isset($routes[$uri])) {
                return '/'.$uri;
            }
        }
 
        return '/';
    }
}