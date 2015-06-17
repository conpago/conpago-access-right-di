<?php
	/**
	 * Created by PhpStorm.
	 * User: Bartosz Gołek
	 * Date: 2014-06-30
	 * Time: 23:04
	 */

	namespace Conpago\AccessRight;

	use Conpago\DI\IContainerBuilder;
	use Conpago\DI\IModule;

	class AccessRightModule implements IModule
	{
		public function build(IContainerBuilder $builder)
		{
			$builder
				->registerType('Conpago\AccessRight\AccessRightChecker')
				->asA('Conpago\AccessRight\Contract\IAccessRightChecker');
		}
	}
