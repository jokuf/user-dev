<?php

namespace Jokuf\Contract\User;


interface UserRepositoryInterface
{
    /**
     * @param string $email
     * @return UserInterface
     */
    public function findByEmail(string $email): UserInterface;

    /**
     * @param int $id
     * @return UserInterface
     */
    public function findById(int $id): UserInterface;

    /**
     * @param UserInterface $user
     */
    public function insert(UserInterface $user): UserInterface;

    /**
     * @param UserInterface $user
     */
    public function update(UserInterface $user): void;

    /**
     * @param UserInterface $user
     */
    public function delete(UserInterface $user): void;
}