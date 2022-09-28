<?php 
namespace Hcode\Model;

use \Hcode\DB\Sql; 
use  \Hcode\Model; 


class user extends Model { 

    public static function login($login, $passoword) {

        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_users where deslogin = :LOGIN", array (
            'LOGIN'=> $login
        )); 
        
        if (count($result) === 0) {
            throw new \Exception("Erro no login ou senha1",);
        }
         
       $data  = $result[0];
    
        if (password_verify($passoword, $data['despassoword']) == true) { 
              
        $user = new user(); 
        $user->setiduser($data["iduser"]);

      }  else {

        throw new \Exception("Erro no login ou senh2",);
        
      }          

    }



}

?>