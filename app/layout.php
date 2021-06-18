<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexandre, Nicolas, Madalena, Vinícius e Allan">
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeyWords(); ?>">

    <title><?php echo $this->getTitle(); ?></title>

    
    <link rel="stylesheet" href="<?php echo DIRECTORYCSS; ?>/index.css" >
    <?php echo $this->addHead(); ?>
</head>
<body>
    <header>
        <div class="label-menu">
            <label for="menu-check">
                <span>&#9776;</span>
                <span>menu</span>
            </label>
            <input type="checkbox" name="menu-check" id="menu-check">
            <section class="menu">
                <nav>
                    <ul>
                        <a href="<?php echo DIRECTORYHOST."home/"; ?>"><li>Home</li></a>
                        <a href="<?php echo DIRECTORYHOST."materia/"; ?>"><li>Matérias</li></a>
                        <a href="<?php echo DIRECTORYHOST."cadastro/"; ?>"><li>Cadastro</li></a>
                        <a href="<?php echo DIRECTORYHOST."login/"; ?>"><li>Login</li></a>
                        <a href="<?php echo DIRECTORYHOST."logout/"; ?>"><li>Logout</li></a>
                    </ul>
                </nav>
                <label>
                    <input type="checkbox" name="theme">
                    Modo noturno
                </label>
            </section>
            <div class="dark"></div>
        </div>

        <a href="<?php echo DIRECTORYHOST."home/"; ?>">
            <h1>facilita estudos</h1>
        </a>

        <form action="#" method="get">
            <input type="search" name="search" placeholder="Buscar Questão" >
            <button type="submit">&#128269;</button>
        </form>

        <?php echo $this->addHeader(); ?>
    </header>

        <?php echo $this->addMain(); ?>
        
    <footer>
        <p>
            2021 - Todos os direitos reservados
        </p>
        <p>Alexandre, Nicolas, Madalena, Vinícius e Allan</p>
        
        <?php echo $this->addFooter(); ?>
    </footer>
</body>
</html>