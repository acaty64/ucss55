<?php

namespace Tests;

use App\Acceso;
use App\DataUser;
use App\Facultad;
use App\Sede;
use App\Type;
use App\User;
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{

    protected $defaultUser;
    protected $defaultDataUser;
    protected $authUser;

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

}
