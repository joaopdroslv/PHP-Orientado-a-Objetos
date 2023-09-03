<!DOCTYPE html>
<html lang="pt-br">
<body>
    <a href="index.php" target="_blank">VOLTAR</a>

    <br /><br /><br />
</body>
</html>

<?php 

class Ponto2D {
    private $x;
    private $y;

    public function __construct($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX() {
        return $this->x;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function getY() {
        return $this->y;
    }

    public function setY($y) {
        $this->y = $y;
    }
}

class Circulo {
    private $centro;
    private $raio;

    public function __construct($x = 0, $y = 0, $raio = 1) {
        $this->centro = new Ponto2D($x, $y);
        $this->raio = $raio;
    }

    public function getCentro() {
        return $this->centro;
    }

    public function setCentro($x, $y) {
        $this->centro->setX($x);
        $this->centro->setY($y);
    }

    public function getRaio() {
        return $this->raio;
    }

    public function setRaio($raio) {
        $this->raio = $raio;
    }

    public function inflar($value) {
        $this->raio *= $value;
    }

    public function desinflar($value) {
        $this->raio /= $value;
    }

    public function mover($x, $y) {
        $this->centro->setX($x);
        $this->centro->setY($y);
    }

    public function voltarOrigem() {
        $this->centro->setX(0);
        $this->centro->setY(0);
    }

    public function calcularArea() {
        return M_PI * pow($this->raio, 2);
    }
}


$circulo1 = new Circulo(4, 4, 6);

echo "O centro é: ({$circulo1->getCentro()->getX()} , {$circulo1->getCentro()->getY()})";

echo "<br /><br />";

echo "O raio é: " . $circulo1->getRaio();

echo "<br /><br />";

echo "A área é: " . $circulo1->calcularArea();

echo "<br /><br />";

$circulo1->inflar(2);

echo "O raio após inflar em 2 é: " . $circulo1->getRaio();

echo "<br /><br />";

$circulo1->desinflar(4);

echo "O raio após desinflar em 4 é: " . $circulo1->getRaio();

echo "<br /><br />";

$circulo1->mover(4, 6);

echo "O centro após mover é: ({$circulo1->getCentro()->getX()} , {$circulo1->getCentro()->getY()})";

?>