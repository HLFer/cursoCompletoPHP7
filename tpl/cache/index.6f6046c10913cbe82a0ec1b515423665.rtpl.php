<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Hello <?php echo htmlspecialchars( $Name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
<p>Teste de template</p>
<h2><p>Versão do PHP: <?php echo htmlspecialchars( $Version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p></h2>