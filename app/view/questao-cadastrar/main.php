<main class="container-form">
    <form class="new" action="<?php echo DIRECTORYHOST."questao-cadastrar/novo"; ?>" method="post" enctype="multipart/form-data">
        <h2>Nova Questão</h2>
        <fieldset>
            <legend>Questão</legend>
            <label>
                Enunciado
                <textarea
                    name="enuciado"
                    placeholder="Enunciado. Caso a Questão só tenha comando este campo deve ser vazio."
                    rows="5"
                ></textarea>
            </label>
            <label>
                Imagem
                <input type="file" name="imagem">
            </label>
            <label>
                Comando
                <textarea
                    name="comando"
                    placeholder="Comando. Pergunta principal da Questão."
                    rows="3"
                ></textarea>
            </label>
        </fieldset>
        <fieldset>
            <legend>Resposta</legend>
            <label>
                Alternativa A
                <input type="text" name="a" placeholder="Texto da alternativa A">
            </label>
            <label>
                Alternativa B
                <input type="text" name="b" placeholder="Texto da alternativa B">
            </label>
            <label>
                Alternativa C
                <input type="text" name="c" placeholder="Texto da alternativa C">
            </label>
            <label>
                Alternativa D
                <input type="text" name="d" placeholder="Texto da alternativa D">
            </label>
            <label>
                Alternativa E
                <input type="text" name="e" placeholder="Texto da alternativa E">
            </label>
        </fieldset>
        <fieldset>
            <legend>Pertence a:</legend>
            <label>
                Matéria
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
            <label>
                Assunto
                <select name="assunto">
                    <option value="">Escolha</option>
                <?php
                    $assuntoCadastrar = new App\Controller\ControllerAssuntoCadastro();
                    $assuntos = $assuntoCadastrar->listAssuntos();

                    if ( !$assuntos )
                        die("Não tem assunto cadastradas.");

                    while ( $assunto = $assuntos->fetch_assoc() )
                    {
                        echo "<option value='"
                            .$assunto["i_id_assunto"]."' data-js='"
                            .$assunto["disciplina_i_id_disciplina"]."'>"
                            .$assunto["s_nome_assunto"]."</option>";
                    }
                ?>
                </select>
            </label>
        </fieldset>
        <button type="submit">Salvar</button>
    </form>
    <div class="links">
        <a href="<?php echo DIRECTORYHOST."materia-cadastrar/"; ?>">Nova Matéria<a> |
        <a href="<?php echo DIRECTORYHOST."assunto-cadastrar/"; ?>">Novo Assunto<a>
    </div>

    <script src="<?php echo DIRECTORYJS."/formNemQuestion.js"; ?>"></script>
</main>