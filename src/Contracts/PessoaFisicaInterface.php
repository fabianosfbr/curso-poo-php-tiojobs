<?php

declare(strict_types=1);

namespace fabianosfbr\CursoPooPhp\Contracts;

interface PessoaFisicaInterface
{

    public function getName(): string;

    public function getEmail(): string;

    public function getPhone(): string;

    public function getAge(): int;

    public function getDocument(): string;
}
