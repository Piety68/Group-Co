<?php

namespace src\Async\User\Dao;

interface UserDao
{
	public function getUser($id);

    public function addUser($user);

    public function getUserByMobile($mobile);

    public function updateUserPassword($userId, $password);
}

