<main class="container-form">
    <form class="new" action="<?php echo DIRECTORYHOST."materia-cadastrar/novo"; ?>" method="post"
    enctype="multipart/form-data">
        <h2>Nova Matéria</h2>
        <label>
            Matéria
            <input
                type="text"
                name="materia"
                placeholder="Nome da nova matéria"
                minlength="1"
                maxlength="30"
            >
        </label>
        <label>
            <input type="file" name="imagem">
        </label>
        <button type="submit">Salvar</button>
    </form>
    <div class="links">
        <a href="<?php echo DIRECTORYHOST."assunto-cadastrar/"; ?>">Novo Assunto<a> |
        <a href="<?php echo DIRECTORYHOST."questao-cadastrar/"; ?>">Nova Questão<a>
    </div>
</main>