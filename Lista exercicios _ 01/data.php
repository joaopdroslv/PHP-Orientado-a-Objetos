<!DOCTYPE html>
<html lang="pt-br">
<body>
    <a href="index.php" target="_blank">VOLTAR</a>

    <br /><br /><br />
</body>
</html>

<?php 

class Data {
    private $dia;
    private $mes;
    private $ano;

    public function __construct($dia, $mes, $ano) {
        if (!$this->isValid($dia, $mes, $ano)) {
            throw new Exception("Data inválida");
        }

        $this->setDia($dia);
        $this->setMes($mes);
        $this->setAno($ano);
    }

    public function getDia() {
        return $this->dia;
    }

    public function setDia($dia) {
        $this->dia = $dia;
    }

    public function getMes() {
        return $this->mes;
    }

    public function setMes($mes) {
        $this->mes = $mes;

    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function apresentar() {
        return $this->dia . '/' . $this->mes . '/' . $this->ano;
    }

    public function passarDia() {
        $this->dia++;
        
        // next mounth
        if (!$this->isValid($this->dia, $this->mes, $this->ano)) {
            $this->dia = 1;
            $this->mes++;

            //next year
            if (!$this->isValid($this->dia, $this->mes, $this->ano)) {
                $this->mes = 1;
                $this->ano++;
            }
        }
    }

    private function isValid($dia, $mes, $ano) {
        return checkdate($mes, $dia, $ano);
    }
}

try {
    $data = new Data(28, 03, 2002);

    echo "A data setada é: " . $data->apresentar();

    echo "<br /><br />";

    $data->passarDia();

    echo "O dia seguinte é: " . $data->apresentar();

} catch (Exception $e) {
    echo "Erro ao criar a data: " . $e->getMessage();

}

?>