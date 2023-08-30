<?php
class UserAuthenticator {
    private $userStorage;

    public function __construct(UserStorage $userStorage) {
        $this->userStorage = $userStorage;
    }

    public function authenticate($username, $password) {
        $users = $this->userStorage->getUsers();
        foreach ($users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return true;
            }
        }
        return false;
    }
}