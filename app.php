<?php

require __DIR__ . '/vendor/autoload.php';

use fabianosfbr\CursoPooPhp\PessoaFisica;
use fabianosfbr\CursoPooPhp\PessoaJurica;


$pf = new PessoaFisica(
    name: "Fabiano",
    email: "w5Xwz@example.com",
    phone: "123.456.789-10",
    age: 30,
    cpf: "111.111.111-11"
);


$pj = new PessoaJurica(
    name: "Fabiano",
    email: "w5Xwz@example.com",
    phone: "123.456.789-10",
    cnpj: "11.111.111/1111-11"
);


//dump($pj);
//dump($pj);
//dump($pj);
//dump($pj);

//dump($pf);

if($pf instanceof PessoaFisica) {
    dump("Sim, sou pessoa física");
}

if($pj instanceof PessoaJurica) {
    dump("Sim, sou pessoa jurídica");
}

