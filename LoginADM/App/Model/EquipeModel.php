<?php
class EquipeModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Equipes
    public function criarEquipe($nome, $cor, $modalidade, $participantes) {
        $sql = "INSERT INTO equipes (nome, cor, modalidade, participantes) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $cor, $modalidade, $participantes]);
    }

    // Model para listar Equipes
    public function listarEquipes() {
        $sql = "SELECT * FROM equipes";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Equipes
    public function atualizarEquipe($id_equipe, $nome, $cor, $modalidade, $participantes) {
        $sql = "UPDATE equipes SET nome = ?, cor = ?, modalidade = ?, participantes = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $cor, $modalidade, $participantes, $id_equipe]);
    }
    
    // Model para deletar Equipe
    public function excluirEquipe($id_equipe) {
        $sql = "DELETE FROM equipes WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_equipe]);
    }
}
?>