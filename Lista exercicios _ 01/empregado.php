<!DOCTYPE html>
<html lang="pt-br">
<body>
    <a href="index.php" target="_blank">VOLTAR</a>

    <br /><br /><br />
</body>
</html>

<?php

class Empregado {
    private string $nome;
    private string $sobrenome;
    private float $salario;

    public function __construct($nome, $sobrenome, $salario)
    {
        $this->setNome($nome);
        $this->setSobrenome($sobrenome);
        $this->setSalario($salario);
    }

    public function setNome(string $nome) 
    {
        $this->nome = $nome;
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function setSobrenome(string $sobrenome) 
    {
        $this->sobrenome = $sobrenome;
    }

    public function getSobrenome() 
    {
        return $this->sobrenome;
    }

    public function setSalario(float $salario) 
    {
        if ($salario < 0) {
            $salario = 0.0;
        }

        $this->salario = $salario;
    }

    public function getSalario() 
    {
        return $this->salario;
    }

    public function calcularSalarioAnual()
    {
        return $this->getSalario() * 12;
    }

    public function aplicarAumento()
    {
        $this->setSalario( $this->getSalario() * 1.1 );
    }

}

$empregado1 = new Empregado("JOAO PEDRO", "SILVA", 1000.00);

echo "O salário é: " . $empregado1->calcularSalarioAnual();

echo "<br /><br />";

$empregado1->aplicarAumento();

echo "O salário após o aumento é : " . $empregado1->calcularSalarioAnual();

?>