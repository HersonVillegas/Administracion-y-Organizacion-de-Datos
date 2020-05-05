<?php

class Peliculas
{
	public $nombre_pelicula;
	public $genero_pelicula;
	public $duracion_pelicula;
	public $clasificacion_pelicula;
	public $protagonista_pelicula;

	public function __construct(string $nombre, string $genero, string $duracion, string $clasificacion, string $protagonista)
	{
		$this->nombre_pelicula = $nombre;
		$this->genero_pelicula = $genero;
		$this->duracion_pelicula = $duracion;
		$this->clasificacion_pelicula = $clasificacion;
		$this->protagonista_pelicula = $protagonista;
	}
}