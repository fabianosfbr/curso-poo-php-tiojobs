<?php

namespace fabianosfbr\CursoPooPhp;

use fabianosfbr\CursoPooPhp\PessoaFisica;

class PessoaEstrangeira extends PessoaFisica
{

    public function setDocument(string $document):string
    {
       return $this->cpf = $document;
    }
}