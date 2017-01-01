<?php

namespace Saxulum\AsseticTwig\Silex\Provider;

use Saxulum\AsseticTwig\Provider\AsseticTwigProvider as BaseAsseticTwigProvider;
use Silex\Application;
use Pimple\ServiceProviderInterface;

class AsseticTwigProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function boot(Application $app)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function register(Application $app)
    {
        $pimpleServiceProvider = new BaseAsseticTwigProvider();
        $pimpleServiceProvider->register($app);
    }
}
