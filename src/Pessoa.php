<?php

declare(strict_types=1);

namespace fabianosfbr\CursoPooPhp;

abstract class Pessoa
{

    protected string $name;

    protected string $email;

    protected string $phone;


    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }


}
