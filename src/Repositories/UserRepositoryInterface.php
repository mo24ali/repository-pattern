<?php


namespace Src\Repositories;

use Src\Entities\User;

interface UserRepositoryInterface
{


    public function find(int $id);
    public function save(User $user);
     public function findAll(): array;
}
