<?php

declare(strict_types=1);

namespace fabianosfbr\CursoPooPhp;

abstract class Pessoa
{

    protected string $name;

    protected string $email;

    protected string $phone;

    abstract function getDocument(): string;


    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }




}
