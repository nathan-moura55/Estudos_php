<?php

class Titulo 
{
    private array $notas;

    public function __construct(
        private string $nome,
        private int $anoLancamento,
        private genero $genero,
    ) {
        $this->nome = $nome;
        $this->anoLancamento = $anoLancamento;
        $this->genero = $genero;
        $this->notas = [];
    }

    function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    public function duracaoEmMinutos(): int
    {
        return 0;
    }

}