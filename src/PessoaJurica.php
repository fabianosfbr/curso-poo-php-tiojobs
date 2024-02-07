<?php

declare(strict_types=1);

namespace fabianosfbr\CursoPooPhp;

use fabianosfbr\CursoPooPhp\Contracts\PessoaJuricaInterface;

class PessoaJurica extends  Pessoa implements PessoaJuricaInterface
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

    public function getDocument(): string
    {
        return $this->cnpj;
    }
}
