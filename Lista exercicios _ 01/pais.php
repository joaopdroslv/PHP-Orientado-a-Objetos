<!DOCTYPE html>
<html lang="pt-br">
<body>
    <a href="index.php" target="_blank">VOLTAR</a>

    <br /><br /><br />
</body>
</html>

<?php 

class Pais {
    private $nome;
    private $capital;
    private $tamanho;
    private $fronteiras = array();

    public function __construct($nome, $capital, $tamanho) {
        $this->setNome($nome);
        $this->setCapital($capital);
        $this->setTamanho($tamanho);
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setCapital($capital) {
        $this->capital = $capital;
    }

    public function getCapital() {
        return $this->capital;
    }

    public function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function isIgual($pais) {
        return $this->nome === $pais->getNome() && $this->capital === $pais->getCapital();
    }

    public function definirFronteira($pais) {
        if ($pais !== $this) {
            $this->fronteiras[] = $pais;
        }
    }

    public function listarFronteiras() {
        return $this->fronteiras;
    }

    public function definirVizinhosComuns($paisComparador) {
        $comuns = array();
        
        foreach ($this->fronteiras as $vizinho) {
            if (in_array($vizinho, $paisComparador->fronteiras)) {
                $comuns[] = $vizinho;
            }
        }
        
        return $comuns;
    }
}

$brasil = new Pais('Brasil', 'Brasília', 8515767);
$argentina = new Pais('Argentina', 'Buenos Aires', 2780400);
$uruguai = new Pais('Uruguai', 'Montevidéu', 176215);
$paraguai = new Pais('Paraguai', 'Assunção', 406752);

$brasil->definirFronteira($argentina);
$brasil->definirFronteira($uruguai);
$brasil->definirFronteira($paraguai);

$argentina->definirFronteira($brasil);
$argentina->definirFronteira($uruguai);
$argentina->definirFronteira($paraguai);

echo "Descrição do país: ";

echo "<br /><br />";

echo "País: " . $brasil->getNome()  . "<br />";
echo "Capital: " . $brasil->getCapital() . "<br />";
echo "Dimensão: " . $brasil->getTamanho() . "<br />";

echo "________________";

echo "<br /><br />";

echo "Descrição do país: ";

echo "<br /><br />";

echo "País: " . $argentina->getNome()  . "<br />";
echo "Capital: " . $argentina->getCapital() . "<br />";
echo "Dimensão: " . $argentina->getTamanho() . "<br />";

echo "________________";

echo "<br /><br />";

echo "Fronteiras do Brasil: ";

foreach ($brasil->listarFronteiras() as $paisVizinho) {
    echo $paisVizinho->getNome() . ", ";
}

echo "<br /><br />";

echo "Brasil e Argentina são iguais? " . ($brasil->isIgual($argentina) ? 'Sim!' : 'Não!');

echo "<br /><br />";

$vizinhosComuns = $brasil->definirVizinhosComuns($argentina);

echo "Vizinhos comuns entre Brasil e Argentina: ";

foreach ($vizinhosComuns as $paisVizinho) {
    echo $paisVizinho->getNome() . ", ";
}

?>