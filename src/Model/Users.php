<?php 

namespace Src\Model;

use Src\Services\Curl;

class Users
{
    public static function select($user_name)
    {
        $url = "https://api.github.com/users/{$user_name}";

        $result = Curl::getConn($url);

        if($result)
        {
            return $result;
        } else
        {
            throw new Exception("Nenhum registro encontrado!");
        }
    }

	public static function selectAll()
    {
        $url = "https://api.github.com/users";

        $result = Curl::getConn($url);

        if($result)
        {
            return $result;
        } else
        {
            throw new Exception("Nenhum registro encontrado!");
        }
    }
}