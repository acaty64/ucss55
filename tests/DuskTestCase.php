<?php

namespace Tests;

use App\Acceso;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Laravel\Dusk\TestCase as BaseTestCase;

abstract class DuskTestCase extends BaseTestCase
{
    use CreatesApplication, TestsHelper;

    /**
     * Prepare for Dusk test execution.
     *
     * @beforeClass
     * @return void
     */
    public static function prepare()
    {
        static::startChromeDriver();
    }

    /**
     * Create the RemoteWebDriver instance.
     *
     * @return \Facebook\WebDriver\Remote\RemoteWebDriver
     */
    protected function driver()
    {
        $options = (new ChromeOptions)->addArguments([
            '--disable-gpu',
            '--headless'
        ]);

        return RemoteWebDriver::create(
            'http://localhost:9515', DesiredCapabilities::chrome()->setCapability(
                ChromeOptions::CAPABILITY, $options
            )
        );
    }
    public function authUser($user_id, $facultad_id, $sede_id, $type_id)
    {
        $acceso = Acceso::create([
            'user_id' => $user_id,
            'facultad_id' => $facultad_id,
            'sede_id' => $sede_id,
            'type_id' => $type_id
            ]);

        Acceso::setAccesoAttributes($facultad_id, $sede_id, $type_id);
 
        return $acceso;
    }
}
