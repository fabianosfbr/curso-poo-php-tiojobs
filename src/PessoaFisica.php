<?php

declare(strict_types=1);

namespace fabianosfbr\CursoPooPhp;

use fabianosfbr\CursoPooPhp\Contracts\PessoaFisicaInterface;

class PessoaFisica extends  Pessoa implements PessoaFisicaInterface
{

    private int $age;
    protected string $cpf;

    public function __construct(
        string $name,
        string $email,
        string $phone,
        int $age,
        string $cpf
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->age = $age;
        $this->cpf = $cpf;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getDocument(): string
    {
        return $this->cpf;
    }
}
