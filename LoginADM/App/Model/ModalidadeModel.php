<?php
class ModalidadeModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Modalidades
    public function criarModalidade($nome, $regras, $data) {
        $sql = "INSERT INTO modalidades (nome, regras, data) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $regras, $data]);
    }

    // Model para listar Modalidades
    public function listarModalidades() {
        $sql = "SELECT * FROM modalidades";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Modalidades
    public function atualizarModalidade($nome, $regras, $data, $id_modalidade){
        $sql = "UPDATE modalidades SET nome = ?, regras = ?, data = ? WHERE id_modalidades = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $regras, $data, $id_modalidade]);
    }
    
    // Model para deletar Modalidade
    public function excluirModalidade($id_modalidade) {
        $sql = "DELETE FROM modalidades WHERE id_modalidades = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_modalidade]);
    }
}