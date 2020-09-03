<?php


namespace Jokuf\Contract\User;


use Jokuf\Authorization\RoleInterface;

interface UserInterface
{
    /**
     * @param int $id
     * @return mixed
     */
    public function setId(int $id);
    /**
     * @return mixed|null
     */
    public function getIdentity();

    /**
     * @return string|null
     */
    public function getName();

    /**
     * @return string|null
     */
    public function getLastName();

    /**
     * @return string|null
     */
    public function getEmail();

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @param string $password
     * @return bool
     */
    public function verifyPassword(string $password): bool;

    /**
     * @return bool
     */
    public function isAuthenticated(): bool;

    /**
     * @return RoleInterface[]
     */
    public function getRoles(): array;
}