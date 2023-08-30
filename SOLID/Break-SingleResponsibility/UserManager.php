<?php
class UserManager {
    private $users = [];

    public function addUser($user) {
        $this->users[] = $user;
    }

    public function authenticate($username, $password) {
        foreach ($this->users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return true;
            }
        }
        return false;
    }
}
