<?php
require_once __DIR__ . '/../vendor/autoload.php';


use Src\Repositories\Impl\UserRepository;
use Src\Services\UserService;
use Src\Entities\User;

$userRepo = new UserRepository();
$userService = new UserService($userRepo);


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nom = $_POST['name'];
    $age = $_POST['age'];    // 33 ->> post: '33' ->> recuperation : '3esf3'
    var_dump($age);

    $user = new User($nom, "3gg3");
    $userService->register($user);



    
}


$users = $userService->listUsers();
foreach($users as $user){
    echo "<pre>";
    echo "user : ".$user->getName() . " age : " . $user->getAge();
    echo "</pre>";

}

?>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="number" name="age" placeholder="Age" required>
    <button type="submit">Add User</button>
</form>
