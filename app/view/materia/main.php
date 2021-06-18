<main>
<?php include_once(DIRECTORYINCLUDES."/CheckLogin.php"); ?>

            <div class="path">
                <a href="<?php echo DIRECTORYHOST."materia/"; ?>">Matéria</a>
            </div>
            <?php
            
            echo $_SESSION["warning"];
            $_SESSION["warning"] = "";
            
            ?>
            <section>
                <?php

                $classMateria = new App\Controller\ControllerMateria();
                $materias = $classMateria->listGridMaterias();
                if ( !$materias )
                    die("Não tem matérias cadastradas.");

                while ( $materia = $materias->fetch_assoc() )
                {
                    $url = "url('data:image/;base64,".base64_encode($materia["b_image_disciplina"])."');";
                    $link = DIRECTORYHOST."assunto/";

                    echo '<form method="post" action="'.$link.'" class="materia">
                            <div class="icon-materia"
                                style="background-image: '.$url.'"
                            ></div>
                            <input type="hidden" name="id" value="'.$materia["i_id_disciplina"].'" />
                            <input type="submit" value="'.$materia["s_nome_disciplina"].'" />
                        </form>';
                }

                include_once(DIRECTORYINCLUDES."/IsSuper.php");
                echo '<div class="materia nova">
                        <a href="'.DIRECTORYHOST.'materia-cadastrar/">
                            <div class="icon-materia"></div>
                        </a>
                        <a href="'.DIRECTORYHOST.'materia-cadastrar/">
                            <span>nova materia</span>
                        </a>
                    </div>';
                
                ?>

            </section>

        </main>
