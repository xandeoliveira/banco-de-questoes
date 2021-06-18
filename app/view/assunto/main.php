<main>
<?php include_once(DIRECTORYINCLUDES."/CheckLogin.php"); ?>

        <div class="path">
            <a href="<?php echo DIRECTORYHOST."materia/"; ?>">Matéria</a>
            <span>></span>
            <a href="<?php echo DIRECTORYHOST."assunto/"; ?>">Assunto</a>
        </div>
        <section>

        <?php
            echo $_SESSION["warning"];
            $_SESSION["warning"] = "";
            
            $classAssunto = new App\Controller\ControllerAssunto();
            $assuntos = $classAssunto->listGridAssuntos();

            if ( !$assuntos )
                die("Não tem assuntos cadastrados.");


            while ( $assunto = $assuntos->fetch_assoc() )
            {
                // $url = "url('data:image/;base64,".base64_encode($assunto["b_image_assunto"])."');";
                $url = "";
                $link = DIRECTORYHOST."questao/";

                echo '<form method="post" action="'.$link.'" class="assunto">
                        <div class="icon-assunto"
                            style="background-image: '.$url.'"
                        ></div>
                        <input type="hidden" name="id" value="'.$assunto["i_id_assunto"].'" />
                        <input type="submit" value="'.$assunto["s_nome_assunto"].'" />
                    </form>';
            }

            include_once(DIRECTORYINCLUDES."/IsSuper.php");
            echo '<div class="assunto novo">
                    <a href="'.DIRECTORYHOST."assunto-cadastrar/".'">
                        <div class="icon-assunto"></div>
                    </a>
                    <a href="'.DIRECTORYHOST."assunto-cadastrar/".'">
                        <span>novo assunto</span>
                    </a>
                </div>';

        ?>

            
        </section>
    </main>
