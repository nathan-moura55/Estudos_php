<?php

class Serie extends Titulo
{
    public function __construct(
        string $nome,
        int $anoLancamento,
        genero $genero,
        public readonly int $temporadas,
        public int $espisodioPorTemporada,
        public int $minutorPorEpisodios
    ) {
        parent::__construct($nome, $anoLancamento, $genero);
    }
    
    public function duracaoEmMinutos(): int
    {
        return $this->temporadas * $this->espisodioPorTemporada * $this->minutorPorEpisodios;
    }


} 