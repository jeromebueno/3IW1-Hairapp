<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 05/04/2018
 * Time: 19:21
 */
?>

<div class="container">
    <div class="col-l-12 center">
        <h1>Une authentification est nécessaire pour accéder à la ressource</h1>
        <p class='text-center'>Vous n'êtes pas autorisé à accéder à ce contenu.</p>
        <p class='text-center'>Cliquez <a href='#'>ici</a> pour retourner sur l'écran de connexion.</p>
<meta http-equiv="refresh" content="5;<?php echo DIRNAME ?>login/getLogin">
    </div>
</div>RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule ^(.*)$ router.php [L]