<?php


use Src\Entities\User;

    interface UserRepository{
        public function register(User $user);
        public function findById(int $id);
        public function findAll();
    }