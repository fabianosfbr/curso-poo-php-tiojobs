<?php

declare(strict_types=1);

namespace fabianosfbr\CursoPooPhp;

class PessoaJurica extends  Pessoa
{
    private string $cnpj;


    public function __construct(
        string $name,
        string $email,
        string $phone,
        string $cnpj
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->cnpj = $cnpj;
    }
}
