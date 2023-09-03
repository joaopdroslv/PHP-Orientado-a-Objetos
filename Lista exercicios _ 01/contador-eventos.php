<!DOCTYPE html>
<html lang="pt-br">
<body>
    <a href="index.php" target="_blank">VOLTAR</a>

    <br /><br /><br />
</body>
</html>

<?php 

class Contador {
    private $value;

    public function __construct($initialValue = 0) {
        $this->value = $initialValue;
    }

    public function restart() {
        $this->value = 0;
    }

    public function increment() {
        $this->value++;
    }

    public function getValue() {
        return $this->value;
    }
}


$count = new Contador(10);

echo "Valor setado inicilamente: " . $count->getValue();

echo "<br /><br />";

$count->increment();

echo "Valor incrementado: " . $count->getValue();

echo "<br /><br />";

$count->restart();

echo "Valor reiniciado: " . $count->getValue();
?>