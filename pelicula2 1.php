<?php
Class Pelicula{
public $pelicula2;
public $duracion;
public $precio;
public $director;
public $actorPrincipal;
public $genero;

public function __construct()
    {
        $this->pelicula2 = "Scary movie";
        $this->duracion= "68 minutos";
		$this->precio="10,90 €";
		$this->director="Alfonso X El Sabio";
		$this->actorPrincipal="Tutankamon";
		$this->genero="Drama-Comedia";
    }
	
	public function getPelicula2()
    {
        return $this->pelicula2;
    }
	public function getDuracion()
    {
        return $this->duracion;
    }
	public function getPrecio()
    {
        return $this->precio;
    }
	public function getDirector()
    {
        return $this->director;
    }
	public function getActorPrincipal()
    {
        return $this->actorPrincipal;
    }
	public function getGenero()
    {
        return $this->genero;
    }
	public function setPrecio($precio){
		$this->precio=$precio;
	}
	public function setActorPrincipal($actorPrincipal){
		$this->actorPrincipal=$actorPrincipal;
	}
	
	
	
}

$estreno= new Pelicula();
echo"<h4> PELÍCULA 2 </h4>";
echo "Nombre de la película:".$estreno->getPelicula2() . "<br>";
echo "Duración:".$estreno->getDuracion() . "<br>";
echo $estreno->setPrecio("7€");
echo "Precio:".$estreno->getPrecio() . "<br>";
echo"Director:".$estreno->getDirector() . "<br>";
echo $estreno->setActorPrincipal("Estela Reynolds");
echo "Actor principal:".$estreno->getActorPrincipal() . "<br>";
echo "Género:".$estreno->getGenero() . "<br>";

?>