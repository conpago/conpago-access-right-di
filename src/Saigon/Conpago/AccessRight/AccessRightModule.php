<?php
	/**
	 * Created by PhpStorm.
	 * User: Bartosz Gołek
	 * Date: 2014-06-30
	 * Time: 23:04
	 */

	namespace Saigon\Conpago\AccessRight;

	use Saigon\Conpago\DI\IContainerBuilder;
	use Saigon\Conpago\DI\IModule;

	class AccessRightModule implements IModule
	{
		public function build(IContainerBuilder $builder)
		{
			$builder
				->registerType('Saigon\Conpago\AccessRight\AccessRightChecker')
				->asA('Saigon\Conpago\AccessRight\Contract\IAccessRightChecker');
		}
	}