<?php

namespace Src\Services;


use Src\Repositories\Impl\UserRepository;
use Src\Repositories\UserRepositoryInterface;


use Src\Entities\User;


    class UserService{
        
        private UserRepositoryInterface $userRepository;



        public function __construct(UserRepositoryInterface $userRepo)
        {
            $this->userRepository = $userRepo;
        }

        public function isKayn(int $id): string{


            if($this->userRepository->find($id)){
                return "kayn";

            }
            return "makaynch";
        }


        public function register(User $user){
            if($this->userRepository->save($user)){
                return "tzad with success";
            }
            return "gha 3awd chof";
        }

        public function listUsers(): array{
            return $this->userRepository->findAll();
        }
        
    }