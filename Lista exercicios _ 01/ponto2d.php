<!DOCTYPE html>
<html lang="pt-br">
<body>
    <a href="index.php" target="_blank">VOLTAR</a>

    <br /><br /><br />
</body>
</html>

<?php 

class Ponto2d {
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

    public function definir($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function comparar($ponto) {
        return $this->x === $ponto->getX() && $this->y === $ponto->getY();
    }

    public function clonar() {
        return new Ponto2d($this->x, $this->y);
    }

    public function calcular($ponto) {
        $distX = $ponto->getX() - $this->x;
        $distY = $ponto->getY() - $this->y;
        
        return sqrt($distX * $distX + $distY * $distY);
    }
}

$ponto1 = new Ponto2d(2, 6);

$ponto2 = new Ponto2d(3, 9);

$ponto3 = $ponto1->clonar();

$ponto3->setX(11);

echo "Distância entre ponto 1 e ponto 2: " . $ponto1->calcular($ponto2);

echo "<br /><br />";

echo "Ponto 1: ({$ponto1->getX()}, {$ponto1->getY()})";

echo "<br /><br />";

echo "Ponto 2: ({$ponto2->getX()}, {$ponto2->getY()})";

echo "<br /><br />";

echo "Ponto 3: ({$ponto3->getX()}, {$ponto3->getY()})";

?>