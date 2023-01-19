<?php
class Database {
    private $connection;

    public function connect() {
        $dbhost = "localhost";
        $dbuser = "root";
        $db = "diario-trade";
        $connection = mysqli_connect($dbhost, $dbuser, '',$db) or die("Connect failed: %s\n". $conn -> error);

        return $connection;
    }
    public function close() {
        return $connection->close();
    }
    public function add(string $ativo, date $data, time $hora, string $ponta, string $resultado_operacao, int $pontos, int $resultado_valor, string $padrao, string $comentario) {
        $insereTrade = $this->mysql->prepare('INSERT INTO operacoes (ativo, data, hora, ponta, resultado_operacao, pontos, resultado_valor, padrao, comentario) VALUES (?,?,?,?,?,?,?,?,?);');
        $insereTrade->bind_param('sssssssss', $ativo, $dataTrade, $horaTrade, $pontaTrade, $resultadoTrade, $pontosTrade, $valorTrade, $padraoOp, $comentarioTrade);
        $dataTrade = implode("-",array_reverse(explode("/",$dataTrade))); //transformar a data?!
        $insereTrade->execute();
    }
}
?>