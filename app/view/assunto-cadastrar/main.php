<main class="container-form">
    <form class="new" action="<?php echo DIRECTORYHOST."assunto-cadastrar/novo"; ?>" method="post">
        <h2>Novo Assunto</h2>
        <label>
            Assunto
            <input
                type="text"
                name="assunto"
                placeholder="Nome do novo assunto"
                minlength="1"
                maxlength="35"
            >
        </label>
        <label>
            Selecione a Matéria
            <select name="materia">
                <option value="">Escolha</option>
            <?php
                $materiaCadastrar = new App\Controller\ControllerMateriaCadastro();
                $materias = $materiaCadastrar->listMaterias();
                if ( !$materias )
                    die("Não tem matérias cadastradas.");

                while ( $materia = $materias->fetch_assoc() )
                {
                    echo "<option value='"
                        .$materia["i_id_disciplina"]."'>"
                        .$materia["s_nome_disciplina"]."</option>";
                }
            ?>
            </select>
        </label>
        <button type="submit">Salvar</button>
    </form>
    <div class="links">
        <a href="<?php echo DIRECTORYHOST."materia-cadastrar/"; ?>">Novo Matéria<a> |
        <a href="<?php echo DIRECTORYHOST."questao-cadastrar/"; ?>">Nova Questão<a>
    </div>
</main>