{include file="header.tpl" }
<div class="div-content-user">
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
</div>
{include file="footer.tpl" }