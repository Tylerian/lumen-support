<?php

namespace Tylerian\Lumen\Support\Proxies;

use Laravel\Lumen\Routing\Router;
use Illuminate\Contracts\Routing\Registrar;

class RouterProxy implements Registrar
{
    /**
     * The router instance.
     * 
     * @var Laravel\Lumen\Routing\Router
     */
    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * Register a new GET route with the router.
     *
     * @param  string  $uri
     * @param  \Closure|array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function get($uri, $action)
    {
        $this->router->get($uri, $action);
    }

    /**
     * Register a new POST route with the router.
     *
     * @param  string  $uri
     * @param  \Closure|array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function post($uri, $action)
    {
        $this->router->post($uri, $action);
    }

    /**
     * Register a new PUT route with the router.
     *
     * @param  string  $uri
     * @param  \Closure|array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function put($uri, $action)
    {
        $this->router->put($uri, $action);
    }

    /**
     * Register a new DELETE route with the router.
     *
     * @param  string  $uri
     * @param  \Closure|array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function delete($uri, $action)
    {
        $this->router->delete($uri, $action);
    }

    /**
     * Register a new PATCH route with the router.
     *
     * @param  string  $uri
     * @param  \Closure|array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function patch($uri, $action)
    {
        $this->router->patch($uri, $action);
    }

    /**
     * Register a new OPTIONS route with the router.
     *
     * @param  string  $uri
     * @param  \Closure|array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function options($uri, $action)
    {
        $this->router->options($uri, $action);
    }

    /**
     * Register a new route with the given verbs.
     *
     * @param  array|string  $methods
     * @param  string  $uri
     * @param  \Closure|array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function match($methods, $uri, $action)
    {
        $this->router->match($methods, $uri, $action);
    }

    /**
     * Route a resource to a controller.
     *
     * @param  string  $name
     * @param  string  $controller
     * @param  array   $options
     * @return \Illuminate\Routing\PendingResourceRegistration
     */
    public function resource($name, $controller, array $options = [])
    {
        throw new NotSupportedException;
    }

    /**
     * Create a route group with shared attributes.
     *
     * @param  array  $attributes
     * @param  \Closure|string  $routes
     * @return void
     */
    public function group(array $attributes, $routes)
    {
        $this->router->group($attributes, $routes);
    }

    /**
     * Substitute the route bindings onto the route.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @return \Illuminate\Routing\Route
     */
    public function substituteBindings($route)
    {
        throw new NotSupportedException;
    }

    /**
     * Substitute the implicit Eloquent model bindings for the route.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @return void
     */
    public function substituteImplicitBindings($route)
    {
        throw new NotSupportedException;
    }
}