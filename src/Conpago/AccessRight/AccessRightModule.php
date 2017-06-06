<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 2014-06-30
 * Time: 23:04
 */

namespace Conpago\AccessRight;

use Conpago\AccessRight\Contract\IAccessRightChecker;
use Conpago\DI\IContainerBuilder;
use Conpago\DI\IModule;

class AccessRightModule implements IModule
{
    public function build(IContainerBuilder $builder)
    {
        $builder
            ->registerType(AccessRightChecker::class)
            ->asA(IAccessRightChecker::class);
    }
}
