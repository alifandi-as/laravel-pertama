<?php
    namespace App\Repositories;
    use App\Models\User;

    class UserRepository
    {
        public static function listAllUsersDetail(){
            return User::all();
        }
        public static function listAllUsersName(){
            return User::query()
            ->select(['name'])
            ->get();
        }
    }
?>