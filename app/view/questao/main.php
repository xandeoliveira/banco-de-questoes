<main>
<?php include_once(DIRECTORYINCLUDES."/CheckLogin.php"); ?>
        
        <div class="path">
            <a href="<?php echo DIRECTORYHOST."materia/"; ?>">Materia</a> >
            <form action="<?php echo DIRECTORYHOST."assunto/"; ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $_SESSION["materia"]; ?>">
                <input type="submit" value="Assunto">
            </form>
        </div>
        <section>
        <?php
        
        echo $_SESSION["warning"];
        $_SESSION["warning"] = "";
        
        ?>
            <ul>
                <?php
                
                $classQuestao = new App\Controller\ControllerQuestao();
                $questoes = $classQuestao->listGridQuestoes();
    
                if ( !$questoes )
                    die("Não tem questões cadastradas.");
    
    
                while ( $questao = $questoes->fetch_assoc() )
                {
                    // $url = "url('data:image/;base64,".base64_encode($assunto["b_image_assunto"])."');";
                    $url = "";
                    $link = DIRECTORYHOST."questao/resolver";
    
                    echo '<form method="post" action="'.$link.'" class="questao">
                            <label for="submit">
                                <li>
                                    <span>'.$questao["enunciado"].'</span>
                                    <div class="question-icons">
                                        <span>&#10003;</span>
                                    </div>
                                </li>
                            </label>
                            <input type="hidden" name="id" value="'.$questao["id"].'" />
                            <input type="submit" id="submit" value="" />
                        </form>';
                }
    
                include_once(DIRECTORYINCLUDES."/IsSuper.php");
                echo '<a href="'.DIRECTORYHOST."questao-cadastrar/".'">
                        <li class="novo">
                            Adicionar uma questão
                        </li>
                    </a>';
                
                ?>
                
            </ul>
        </section>

    </main>