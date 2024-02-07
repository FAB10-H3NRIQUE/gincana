<?php
require_once 'App\Model\EquipeModel.php';

class EquipeController {
    private $equipeModel;

    public function __construct($pdo) {
        $this->equipeModel = new EquipeModel($pdo);
    }

    public function criarEquipe($nome, $cor, $modalidade, $participantes) {
        $this->equipeModel->criarEquipe($nome, $cor, $modalidade, $participantes);
    }

    public function listarEquipes() {
        return $this->equipeModel->listarEquipes();
    }

    public function exibirListaEquipes() {
        $equipes = $this->equipeModel->listarEquipes();
        include 'App/View/Equipes/lista.php';
    }

    public function atualizarEquipe($id, $nome, $cor, $modalidade, $participantes) {
        $this->equipeModel->atualizarEquipe($id, $nome, $cor, $modalidade, $participantes);
    }
    
    public function excluirEquipe($id) {
        $this->equipeModel->excluirEquipe($id);
    }
}
?>