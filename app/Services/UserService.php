<?php
    namespace App\Services;
    use App\Repositories\UserRepository;

    class UserService
    {
        public static function listAllUsersDetail(){
            $userList = UserRepository::listAllUsersDetail();
            
            foreach ($userList as $row){
                $row->intro_name = "Nama pengguna ini adalah ".$row->name;
                $row->intro_password = "Sandi pengguna ini adalah ".$row->passowrd;
            }
            return $userList;
        }

        public static function listAllUsersName(){
            $userList = UserRepository::listAllUsersName();
            
            foreach ($userList as $row){
                $row->intro_name = "Nama pengguna ini adalah ".$row->name;
            }
            return $userList;
        }
    }
?>