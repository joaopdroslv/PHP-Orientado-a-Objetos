<!DOCTYPE html>
<html lang="pt-br">
<body>
    <a href="index.php" target="_blank">VOLTAR</a>

    <br /><br /><br />
</body>
</html>

<?php

class Invoice {
    private int $numero;
    private string $descricao;
    private int $quantidade;
    private float $valorUnitario;

    public function __construct($numero, $descricao, $quantidade, $valorUnitario)
    {
        $this->setNumero($numero);
        $this->setDescricao($descricao);
        $this->setQuantidade($quantidade);
        $this->setValorUnitario($valorUnitario);
    }

    public function setNumero(int $numero) 
    {
        $this->numero = $numero;
    }

    public function getNumero() 
    {
        return $this->numero;
    }

    public function setDescricao(string $descricao) 
    {
        $this->descricao = $descricao;
    }

    public function getDescricao() 
    {
        return $this->descricao;
    }

    public function setQuantidade(int $quantidade) 
    {

        if ($quantidade < 0) {
            $this->quantidade = 0;
        } else {
            $this->quantidade = $quantidade;
        }
    }

    public function getQuantidade() 
    {
        return $this->quantidade;
    }

    public function setValorUnitario(float $valorUnitario) 
    {

        if ($valorUnitario < 0) {
            $this->valorUnitario = 0.0;
        } else {
            $this->valorUnitario = $valorUnitario;
        }
    }

    public function getValorUnitario() 
    {
        return $this->valorUnitario;
    }

    public function getInvoiceAmount() 
    {
        return $this->getQuantidade() * $this->getValorUnitario();
    }
}

$fatura1 = new Invoice(1, "Notebook", 3, 3000.00);

$totalFatura1 = $fatura1->getInvoiceAmount();

echo "O total da fatura é: " . $totalFatura1;

echo "<br /><br />";

$fatura2 = new Invoice(2, "Cabo DisplayPort", 10, -100);

$totalFatura2 = $fatura2->getInvoiceAmount();

echo "O total da fatura é: " . $totalFatura2;

echo "<br /><br />";

$fatura3 = new Invoice(2, "Fonte 500w", -10, 320);

$totalFatura3 = $fatura3->getInvoiceAmount();

echo "O total da fatura é: " . $totalFatura3;

?>