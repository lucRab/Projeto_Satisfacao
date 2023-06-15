<?php
namespace App\Model;
require_once("../../core/conexao.php");
use PDOException;
class UserModel {
    


    public function createUser($data) {
        $conexao = \Conexao::conectar();
        
        try {
            if (gettype($conexao)!== 'string' and get_class($conexao) == 'PDO') {          
                $insert = $conexao->prepare("INSERT INTO aluno(cod_bairro, cod_escola, cod_escoralidade, 
                nome_aluno,data_nascimento, nome_pai, nome_mae, sexo, rg, cpf, telefone_residencial,
                telefone_celular, email, tipo_sanguineo, estado_civil, serie_escolar, turno_escolar, manequin,
                numero_calcado, endereco, numero_endereco, possui_alergia, portador_pne, qual_pne,
                medicacao_controlada, qual_medicacao, possui_bolsa_familia, numero_bolsa_familia, numero_cnis,
                renda_familiar, ex_aluno, seduc, qual_curso_fez, obs, nome_civil, responsavel_rg, responsavel_cpf)               
                 VALUES(:id_bairro, :id_escola, :nome, :rg)");
                $insert->execute(array( 'id_bairro' => $data->id_bairro,
                'id_escola' => $data->id_escola,'nome' => $data->nome, 'rg' => $data->rg));
            }else throw new PDOException($conexao);
        }catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    public function getUser() {

    }

    public function updateUser($nome) {

        $conexao = \Conexao::conectar();
        try {
            if (gettype($conexao)!== 'string' and get_class($conexao) == 'PDO') {
                $update = $conexao->prepare("UPDATE aluno SET nome_aluno = :nome WHERE cod_aluno = :id");
                $update->execute(['nome' => $nome, 'id' => 5]);
            }else throw new PDOException($conexao);
        }catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}

$o = new \stdClass;
$o->id_bairro = null;
$o->id_escola= null;
$o->nome = "teste nome";
$o->rg = 123456;

$teste = new UserModel;
$teste->createUser($o);

