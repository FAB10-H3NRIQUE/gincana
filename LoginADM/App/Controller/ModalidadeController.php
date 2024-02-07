<?php
require_once 'App\Model\ModalidadeModel.php';


class ModalidadeController {
    private $ModalidadeModel;

    public function __construct($pdo) {

        $this->modalidadeModel = new ModalidadeModel($pdo);
    }

    public function criarModalidade($nome, $regras, $data) {
        $this->modalidadeModel->criarModalidade($nome, $regras, $data);
    }

    public function listarModalidades() {
        return $this->ModalidadeModel->listarModalidades();
    }

    public function exibirListaModalidade() {
        $modalidades = $this->modalidadeModel->listarModalidades();
        include 'App/View/Usuarios/lista.php';
    }

    public function atualizarUser($nome, $regras, $data) {
        $this->userModel->atualizarUser($nome, $regras, $data);
    }
    
    public function excluirModalidade ($id_modalidade) {
        $this->ModalidadeModel->excluirModalidade($id_modalidade);
    }
}
?>