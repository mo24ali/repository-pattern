<?php

namespace Src\Repositories\Impl;


use Config\Database;
use Src\Repositories\UserRepositoryInterface;
use Src\Entities\User;
use PDO;
class UserRepository implements UserRepositoryInterface
{

    private ?PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }
    public function find(int $id): bool
    {
        $sql = "select * from users where id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function save(User $user)
    {
        $sql = "insert into users(name,age)
                    values(?,?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$user->getName(), $user->getAge()]);
    }
    public function findAll(): array {
        $sql = "select * from users";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
     
        
        $users = [];
        while($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
                $users[] = new User($rows['name'],(int)$rows['age']);
        }
        return $users;
    }
}
