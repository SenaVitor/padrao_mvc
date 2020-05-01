<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Vitor Lucas">
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS.'Style.css' ?>">
    <?php echo $this->addHead(); ?>
</head>
<body>

    <div class="Nav">
        <a href="<?php echo DIRPAGE; ?>">Home</a>
        <a href="<?php echo DIRPAGE.'/contato'; ?>">Contato</a>
    </div>

    <div class="Header">
        <img class="img" src="<?php echo DIRIMG.'img.jpg'; ?>" alt="Banner">
        <?php
        $BreadCrumb = new Src\Classes\ClassBreadcrumb();
        $BreadCrumb->addBreadcrumb();
        ?>
        <br><br><hr>
        TEL.: (XX) XXXXXXXXX <br>
        <?php echo $this->addHeader(); ?>
    </div>
    <div class="Main">
        <?php echo $this->addMain(); ?>
    </div>
    <div class="Footer">
        2020 - Todos os direitos reservados Vitor Lucas
        <?php echo $this->addFooter(); ?>
    </div>

</body>
</html>