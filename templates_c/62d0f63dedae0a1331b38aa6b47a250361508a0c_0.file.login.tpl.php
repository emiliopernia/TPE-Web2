<?php
/* Smarty version 3.1.39, created on 2021-10-14 03:40:40
  from 'C:\xampp\htdocs\Web2\TpePernia\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61678a9868ee77_74009374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62d0f63dedae0a1331b38aa6b47a250361508a0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TpePernia\\templates\\login.tpl',
      1 => 1634175638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61678a9868ee77_74009374 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="div-content-user">
    <?php if (!empty($_smarty_tpl->tpl_vars['params']->value)) {?>
        <div class="state">
            <h3><?php echo $_smarty_tpl->tpl_vars['params']->value;?>
</h3>
        </div>
    <?php }?>
        
    
    <?php if ($_smarty_tpl->tpl_vars['params']->value != 'Logueado') {?>
        
      <?php if ($_smarty_tpl->tpl_vars['params']->value != "Registro exitoso") {?>
          <div class="div-login">
            <form action="register" method=POST>
                <h3>Registrarse</h3>
                <label for="name">Nombre</label>
                <input type="text" name="name" placeholder="Nombre" required>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required>               
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Minimo 6 caracteres" minlength="6" required>
                <button id="btn-send">Enviar</button>
            </form>
        </div>
      <?php }?>
        
    <div class="div-login">
        <form action="login" method=POST>
            <h3>Ingresar</h3>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" required>               
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Minimo 6 caracteres" minlength="6" required>
            <button id="btn-send">Enviar</button>
        </form>
    </div>
    <?php } else { ?>
        
    <div class="div-login">
        <h3>Desloguearse</h3>
        <button><a href="logout">Enviar</a></button>
    </div>

    <?php }?>
    
</div><?php }
}
