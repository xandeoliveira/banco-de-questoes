<main>
            <div class="path">
                <a href="<?php echo DIRECTORYHOST."materia/"; ?>">Materia</a>
            </div>
            <section>
                <?php
                $classMateria = new App\Controller\ControllerMateria();
                $materias = $classMateria->listGridMaterias();
                if ( !$materias )
                    die("Não tem matérias cadastradas.");

                while ( $materia = $materias->fetch_assoc() )
                {
                    // $url = "url('".$materia["b_imagem_disciplina"."]')";
                    $url = "url('data:image/;base64,".base64_encode($materia["b_image_disciplina"])."');";
                    
                    echo '<div class="materia">
                            <a href="<?php echo DIRECTORYHOST."assunto/"; ?>
                                <div class="icon-materia"
                                    style="background-image: '.$url.'"
                                ></div>
                            </a>
                            <a href="<?php echo DIRECTORYHOST."assunto/"; ?>
                                <span>'.$materia["s_nome_disciplina"].'</span>
                            </a>
                        </div>';
                }
                
                ?>

               <div class="materia nova">
                    <a href="<?php echo DIRECTORYHOST."materia-cadastrar/"; ?>">
                        <div class="icon-materia"></div>
                    </a>
                    <a href="<?php echo DIRECTORYHOST."materia-cadastrar/"; ?>">
                        <span>nova materia</span>
                    </a>
                </div>
            </section>

        </main>
