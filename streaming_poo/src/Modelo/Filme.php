<?php

class Filme extends Titulo
{
    public function __construct(
        string $nome,
        int $anoLancamento,
        genero $genero,
        int $duracaoEmMinutos,
    ) {
        parent::__construct($nome, $anoLancamento, $genero, $duracaoEmMinutos);
    }
   
    public function duracaoEmMinutos(): int
    {
        return $this->duracaoEmMinutos;
    }

}