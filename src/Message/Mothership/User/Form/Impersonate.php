<?php

namespace Message\Mothership\User\Form;

use Message\Cog\Form\Handler;
use Message\User\UserInterface;
use Message\Mothership\User\User;
use Message\Cog\Service\Container;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class Impersonate extends Handler {

	public function __construct(Container $container)
	{
		parent::__construct($container);
	}

	public function buildForm(UserInterface $user, $action = '')
	{
		$this->setMethod('POST')
			 ->setAction($action);

		return $this;
	}

}