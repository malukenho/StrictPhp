<?php

namespace StrictPhp;

use Go\Aop\Features;
use Go\Core\AspectContainer;
use Go\Core\AspectKernel;
use StrictPhp\Aspect\ImmutablePropertyCheck;
use StrictPhp\Aspect\PostConstructStateCheck;
use StrictPhp\Aspect\PropertyWriteTypeCheck;

class StrictPhpKernel extends AspectKernel
{
    /**
     * {@inheritDoc}
     *
     * @override
     */
    protected $options = ['features' => Features::INTERCEPT_INITIALIZATIONS];

    /**
     * {@inheritDoc}
     */
    protected function configureAop(AspectContainer $container)
    {
        $container->registerAspect(new PropertyWriteTypeCheck());
        $container->registerAspect(new ImmutablePropertyCheck());
        $container->registerAspect(new PostConstructStateCheck());
    }
}
