<main class="container-form">
    <form class="new" action="<?php echo DIRECTORYHOST."cadastro/novo"; ?>" method="post">
        <h2>cadastro</h2>
        <span>
            <input
                type="text"
                name="name"
                placeholder="seu nome"
                minlength="1"
                maxlength="60"
                required
            >
            <img src="<?php echo DIRECTORYIMG."/human.svg"; ?>">
        </span>
        <span>
            <input
                type="email"
                name="login"
                placeholder="seu e-mail"
                minlength="1"
                maxlength="80"
                required
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
            required
            >
            <img src="<?php echo DIRECTORYIMG."/key.svg"; ?>">
        </span>
        <button type="submit">cadastrar</button>

        <a href="<?php echo DIRECTORYHOST."login/"; ?>">Já é cadastrado</a>
    </form>
    <?php
    
    if ( isset( $_SESSION["warning"] ) )
    {
        $_SESSION["warning"];
    }
    $_SESSION["warning"] = "";
    
    ?>
</main>