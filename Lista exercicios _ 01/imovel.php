<!DOCTYPE html>
<html lang="pt-br">
<body>
    <a href="index.php" target="_blank">VOLTAR</a>

    <br /><br /><br />
</body>
</html>

<?php

class Porta {
    private $aberta;
    private $cor;
    private $dimensaoX;
    private $dimensaoY;
    private $dimensaoZ;

    public function abrir() {
        $this->aberta = true;
    }

    public function fechar() {
        $this->aberta = false;
    }

    public function pintar($cor) {
        $this->cor = $cor;
    }

    public function isAberta() {
        return $this->aberta;
    }
}

class Imovel {
    protected $cor;
    protected $portas = array();

    public function pintar($cor) {
        $this->cor = $cor;
    }

    public function adicionarPorta(Porta $porta) {
        $this->portas[] = $porta;
    }

    public function calcTotalPortas() {
        return count($this->portas);
    }

    public function calcTotalAbertas() {
        $abertas = 0;

        foreach ($this->portas as $porta) {
            if ($porta->isAberta()) {
                $abertas++;
            }
        }
        return $abertas;
    }
}

class Casa extends Imovel {
    private $porta1;
    private $porta2;
    private $porta3;

    public function __construct($cor) {
        $this->cor = $cor;
        $this->porta1 = new Porta();
        $this->porta2 = new Porta();
        $this->porta3 = new Porta();
    }
}

class Edificio extends Imovel {
    private $totalDeAndares;

    public function __construct($cor, $totalDeAndares) {
        $this->cor = $cor;
        $this->totalDeAndares = $totalDeAndares;
    }

    public function adicionarAndar() {
        $this->totalDeAndares++;
    }

    public function totalAndares() {
        return $this->totalDeAndares;
    }
}

$casa1 = new Casa('azul');

$casa1->adicionarPorta(new Porta());
$casa1->adicionarPorta(new Porta());
$casa1->adicionarPorta(new Porta());

echo "Total de portas da casa: " . $casa1->calcTotalPortas();

echo "<br /><br />";

$edificio1 = new Edificio('verde', 10);

$edificio1->adicionarPorta(new Porta());
$edificio1->adicionarPorta(new Porta());
$edificio1->adicionarPorta(new Porta());

echo "Total de portas do edifício: " . $edificio1->calcTotalPortas();

echo "<br /><br />";

echo "Total de andares do edifício: " . $edificio1->totalAndares();

?>