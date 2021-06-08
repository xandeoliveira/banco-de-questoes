<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassConnection;

class ControllerQuestaoCadastro extends ClassConnection
{
    private $resposta;

    public function __construct ()
    {
        $render = new ClassRender();
        $render->setTitle("Questão - Facilita Estudos");
        $render->setDescription("Página onde as questôes são cadastradas.");
        $render->setDirectory("/questao-cadastrar");
        $render->setKeyWords("questão, cadastrar, facilita estudos");
        
        $render->renderLayout();
    }

    private function getImage ()
    {
        $image = $_FILES["imagem"]["tmp_name"];

        $isAEmpty = empty( $image );
        if ( $isAEmpty )
            return false;

        $file = fopen($image, "rb");
        $readFile = fread($file, filesize($image));
        $content = addslashes($readFile);   
        fclose($file);

        return $content;
    }
    
    private function insertResposta ()
    {
        $gabarito = trim( $_POST["gabarito"] );
        $explicacao = trim( $_POST["explicacao"] );
        
        
        $isAEmpty = empty( $gabarito ) || empty( $explicacao );
        if ( $isAEmpty )
        return false;
        
        $sql = "INSERT INTO resposta
            (s_gabarito_resposta, s_explicacao_resposta)
            VALUES ('$gabarito', '$explicacao')";
        
        $connection = $this->getConnection();
        $return = $connection->query( $sql );
        $this->resposta = $connection->insert_id;
        $connection->close();
        
        return $return ? true : false;
    }
    private function insertQuestao ()
    {
        $enunciado = trim( $_POST["enunciado"] );
        $comando = trim( $_POST["comando"] );
        $imagem = $this->getImage();
        $assunto = trim( $_POST["assunto"] );
        
        $isAEmpty = empty( $comando ) || empty( $assunto );
        if ( $isAEmpty )
            return false;
        
        $sql = "INSERT INTO questao
        (s_enunciado_questao, s_comando_questao, b_imagem_questao, assunto_i_id_assunto, resposta_i_id_resposta)
        VALUES
        ('$enunciado','$comando','$imagem','$assunto','$this->resposta')";

        $connection = $this->getConnection();
        $return = $connection->query( $sql );
        $connection->close();

        return $return ? true : false;
    }
    private function insertOptions ()
    {
        $arrayAlternatives = array("0" => "a", "1" => "b", "2" => "c", "3" => "d", "4" => "d");
        $alternatives = $_POST["alternatives"];

        $isAEmpty = empty( $alternatives );
        if ( $isAEmpty )
            return false;

        $connection = $this->getConnection();
        
        for ( $i = 0 ; $i < $alternatives ; $i++ )
        {
            $item = $arrayAlternatives["{$i}"];
            $valor = $_POST[$item];
            
            $sql = "INSERT INTO resposta_opcao
                (s_item_resposta_opcao, s_valor_resposta_opcao, resposta_i_id_resposta)
                VALUES
                ('$item', '$valor', '$this->resposta')";
            
            $return = $connection->query( $sql );
        }
        
        $connection->close();
    
        return true;
    }

    public function novo ()
    {
        $resposta = $this->insertResposta();
        $questao = $this->insertQuestao();
        $option = $this->insertOptions();
        
        $return = $resposta && $questao && $option;

        return $return ? "Inseridas" : "Não inderidas";
    }
}

?>