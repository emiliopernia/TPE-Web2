{include file="header.tpl" }
    <h1 class="table-title">Usuarios</h1>
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Borrar</th>
            <th>Cambiar rol</th>
        </thead>
        <tbody>
            {foreach from=$users item=user}    
                <tr>
                <td>{$user->userName}</td>
                {if $user->admin == 0}
                <td>user</td>
                {else}
                <td>admin</td>
                {/if}
                    
                <td><a href="deleteUser/{$user->user_id}"><img src="images/bin.png" alt="Borrar"></a></td>
                <td><a href="changeRol/{$user->email}"><img src="images/edit.png" alt="Editar"></a></td>           
            </tr> 
            {/foreach}

        </tbody>
    </table>

{include file="footer.tpl" }