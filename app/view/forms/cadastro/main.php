<main class="container-form">
    <form class="new" action="#" method="get">
        <h2>cadastro</h2>
        <span>
            <input
                type="email"
                name="email"
                placeholder="seu e-mail"
                minlength="1"
                maxlength="60"
            >
            <img src="<?php echo DIRECTORYIMG."/email.svg"; ?>">
        </span>
        <span>
            <input
            type="password"
            name="password"
            placeholder="crie uma senha"
            minlength="8"
            maxlength="60"
            >
            <img src="<?php echo DIRECTORYIMG."/key.svg"; ?>">
        </span>
        <button type="submit">cadastrar</button>

        <a href="<?php echo DIRECTORYHOST."login/"; ?>">Já é cadastrado</a>
    </form>
</main>