<main class="container-form">
    <form class="new" action="<?php echo DIRECTORYHOST."login/entrar/"; ?>" method="post">
        <h2>Login</h2>
        <span>
            <input
                type="text"
                name="user"
                placeholder="seu nome ou login"
                minlength="1"
                maxlength="60"
                required
            >
            <img src="<?php echo DIRECTORYIMG."/human.svg"; ?>">
        </span>
        <span>
            <input
            type="password"
            name="password"
            placeholder="digite sua senha"
            minlength="8"
            maxlength="60"
            required
            >
            <img src="<?php echo DIRECTORYIMG."/key.svg"; ?>">
        </span>
        <button type="submit">Login</button>

        <a href="<?php echo DIRECTORYHOST."cadastro/"; ?>">Não sou cadastrado</a>
    </form>
    <?php
        if ( isset( $_SESSION["warning"] ) )
        {
            $_SESSION["warning"];
        }
        $_SESSION["warning"] = "";
    ?>
</main>