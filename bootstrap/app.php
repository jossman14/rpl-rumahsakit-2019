<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| PHP 8.4 Compatibility Shim
|--------------------------------------------------------------------------
|
| This app targets PHP 7.2/8.0 but is being run on PHP 8.4. Laravel's
| HandleExceptions bootstrapper calls error_reporting(-1) which turns
| PHP 8 E_DEPRECATED notices (fired deep inside the framework's own
| container/reflection code) into ErrorExceptions. Reporting that
| ErrorException itself triggers another deprecated notice while the
| framework resolves the exception handler, causing recursive crashes
| with no error output. We narrow error_reporting back down right after
| that bootstrapper runs so deprecations are ignored instead of thrown.
|
*/

$app->afterBootstrapping(Illuminate\Foundation\Bootstrap\HandleExceptions::class, function () {
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
});

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
