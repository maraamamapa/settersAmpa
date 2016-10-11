<?php
//Clase creada por Alex para Ampa.
Class Libro{
public $titulo;
public $paginas;
public $precio;
public $escritor;
public $protagonista;
public $genero;

public function __construct()
    {
        $this->titulo = "El coleccionista de relojes";
        $this->paginas= "247";
		$this->precio="8,75€";
		$this->escritor="Laura Gallego";
		$this->protagonista="Jonathan Deveraux";
		$this->genero="Misterio";
    }
	
	public function getTitulo()
    {
        return $this->titulo;
    }
    public function getPaginas()
    {
        return $this->paginas;
    }
	
	public function getPrecio()
    {
        return $this->precio;
    }
	public function getEscritor()
    {
        return $this->escritor;
    }
	public function getProtagonista()
    {
        return $this->protagonista;
    }
	public function getGenero()
    {
        return $this->genero;
    }
	public function setPrecio($precio){
		$this->precio=$precio;
	}
	public function setEscritor($escritor){
		$this->escritor=$escritor;
	}
	
	
	
}

$libro= new Libro();
echo "<h4> LIBRO </h4>";
echo "Titulo:".$libro->getTitulo() . "<br>";
echo "Paginas:".$libro->getPaginas() . "<br>";
echo $libro->setPrecio("8,25€");
echo "Precio:".$libro->getPrecio() . "<br>";
echo $libro->setEscritor("El tio Rabal");
echo"Escritor:".$libro->getEscritor() . "<br>";
echo "Protagonista:".$libro->getProtagonista() . "<br>";
echo "Género:".$libro->getGenero() . "<br>";

?>