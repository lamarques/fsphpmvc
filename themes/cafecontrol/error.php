<?php $v->layout("theme"); ?>


<article class="not_found">
    <div class="container content">
        <header class="not_found_header">
            <p class="error"><?php echo $code ?></p>
            <h1><?php echo $title ?></h1>
            <p>Sentimos muito, mas o conteúdo que você tentou acessar não existe, está indisponível ou foi removido
                :/</p>
            <a class="not_found_btn gradient gradient-green gradient-hover transition radius" title="home" href="<?php echo url(); ?>">Continue
                navegando</a>
        </header>
    </div>
</article>
