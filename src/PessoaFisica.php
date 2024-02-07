<?php

declare(strict_types=1);

namespace fabianosfbr\CursoPooPhp;

class PessoaFisica extends  Pessoa
{

    const OBJETCT_TYPE = "Ser humano";

    private int $age;
    private string $cpf;

    public function __construct(
        string $name,
        string $email,
        string $phone,
        int $age,
        string $cpf
    )
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->age = $age;
        $this->cpf = $cpf;
    }






}