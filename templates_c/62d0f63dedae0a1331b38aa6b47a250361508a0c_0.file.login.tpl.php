<?php
/* Smarty version 3.1.39, created on 2021-10-04 00:06:32
  from 'C:\xampp\htdocs\Web2\TpePernia\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a2968037f67_61369245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62d0f63dedae0a1331b38aa6b47a250361508a0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TpePernia\\templates\\login.tpl',
      1 => 1633298789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615a2968037f67_61369245 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="div-content-login">
        <div class="div-login">
            <form id="form">
                <h3>Registrarse</h3>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" placeholder="Apellido" required>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required>               
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Minimo 6 caracteres" minlength="6" required>
                <button id="btn-enviar">Enviar</button>
            </form>
        </div>
    </div><?php }
}
