<?php 

namespace Src\Core;

class Core
{
	public function start($req)
	{
		$uri = explode("/", $req["url"]);

		if($uri[0] === "api")
		{
			array_shift($uri); // Delete "api" from position 0 of array $uri;

			if(!empty($uri))
			{
				$tmp_service = ucfirst($uri[0]);

				$service = "Src\\Controller\\{$tmp_service}Controller";
				array_shift($uri); // Delete "$service" from position of 0 array $uri;

				$method = strtolower($_SERVER["REQUEST_METHOD"]);
			}
			
			$service = "Src\\Controller\\UsersController";
			$method = "get"; // Definindo método padrão como get.
		}

		call_user_func_array(array(new $service, $method), $uri);
	}
}