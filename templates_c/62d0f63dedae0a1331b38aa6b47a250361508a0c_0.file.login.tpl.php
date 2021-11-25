<?php
/* Smarty version 3.1.39, created on 2021-11-25 02:34:38
  from 'C:\xampp\htdocs\Web2\TpePernia\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ee82ead5aa7_99859840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62d0f63dedae0a1331b38aa6b47a250361508a0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TpePernia\\templates\\login.tpl',
      1 => 1637804059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619ee82ead5aa7_99859840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="div-content-user">
    <?php if (!empty($_smarty_tpl->tpl_vars['params']->value)) {?>
        <div class="state">
            <h3><?php echo $_smarty_tpl->tpl_vars['params']->value;?>
</h3>
        </div>
    <?php }?>

    <?php if ((isset($_SESSION['email']))) {?>
        <div class="div-login">
        <h3>Desloguearse</h3>
        <button><a href="logout">Enviar</a></button>
    </div>
    <?php } else { ?>
        <div class="div-login">
        <form action="login" method=POST>
            <a href="showRegister">Registrarse</a>
            <h3>Ingresar</h3>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" required>               
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Minimo 6 caracteres" minlength="6" required>
            <button id="btn-send">Enviar</button>
        </form>
    </div>
    <?php }?>
    
   
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
