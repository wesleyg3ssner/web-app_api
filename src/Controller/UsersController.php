<?php

namespace Src\Controller;

use Src\Model\Users;

class UsersController
{
    public function get()
    {
        try
        {
            if(empty($_GET["user_name"]) or $_GET["user_name"] == "")
            {
               $users = array();
               $users["users"] = Users::selectAll();

               TwigController::renderTwig("index.html", $users);

           } else
           {
               $user_get = $_GET["user_name"];
               $user = array();
               $user["user"] = Users::select($user_get);

               TwigController::renderTwig("index.html", $user); 
           }
       } catch(Exception $error)
       {
        echo $error->getMessage();
    }
}
}