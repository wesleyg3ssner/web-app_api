<?php

namespace Src\Controller;

class TwigController
{
	public static function renderTwig($page, $params)
	{
		$loader = new \Twig\Loader\FilesystemLoader('src/View');
		$twig = new \Twig\Environment($loader);

		echo $twig->render($page, $params);
	}
}