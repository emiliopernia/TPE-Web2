{include file="header.tpl" }

<h1 class="fighters-title">Peleadores</h1>
<div class="filter">
    <form action="userWeightclass" method=POST>
        <select name= "input_weightclass">
            {foreach from=$weightclasses item=weightclass}
                <option value='{$weightclass->weightClass_id}'>{$weightclass->weightClassName}</option>
            {/foreach}
        </select>
        <button type="submit"> Ver categoria seleccionada</button>
        <button><a href='userFighters'>Ver todos </a></button>
    </form>
</div>

<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Apodo</th>
        <th>Categoria</th>
        <th>Estadisticas</th>
        <th>Borrar</th>
        <th>Editar</th>
        
    </thead>
    <tbody>
        {foreach from=$fighters item=fighter}    
            <tr>
            <td>{$fighter->name}</td>
            <td>{$fighter->nickname}</td>
            <td>{$fighter->weightClassName}</td>
            <td><a href="showFighter/{$fighter->id_fighter}"><img src="images/boton.png" alt="Ver mas"></a></td>
            <td><a href="deleteFighter/{$fighter->id_fighter}"><img src="images/bin.png" alt="Borrar"></a></td>
            <td><a href="editFighterPage/{$fighter->id_fighter}"><img src="images/edit.png" alt="Editar"></a></td>
        </tr> 
        {/foreach}    
    </tbody>

</table>

<div class="formsWrapper">
    <div class="formEdit">
        <form action="addFighter" method=POST>
            <h2>Agregar Peleadores</h2>
            <label>Nombre y Apellido</label>
            <input name="name" type="text" placeholder="Nombre y Apellido..." required>
            <label>Apodo</label>
            <input name="nickname" type="text" placeholder="Apodo..." required>
            <label>Nacionalidad</label>
            <input name="nationality" type="text" placeholder="Nacionalidad..." required>
            <label>Edad</label>
            <input name="age" type="number" placeholder="Edad..." required>
            <label>Record</label>
            <input name="record" type="text" placeholder="0/0/0" required>
            <label>Altura</label>
            <input name="height" type="number" placeholder="Altura en cm..." required>
            <label>Peso</label>
            <input name="weight" type="number" placeholder="Peso en kg..." required>
            <label>Categoria</label>
            <select name= "weightclass">
                {foreach from=$weightclasses item=weightclass}
                        <option value='{$weightclass->weightClass_id}'>{$weightclass->weightClassName}</option>                     
                {/foreach}
            </select>
            <label>Ranking</label>
            <input name="rank" type="number" placeholder="ranking..." required>

            <button>CARGAR</button>        
        </form>   
    </div>

    <div class="formEdit">
        <form action="createWeightclass" method=POST>
            <h2>Crear Categoria</h2>
            <label>Categoria</label>
            <input name="weightclass" type="text" placeholder="Categoria..." required>
            <label>Peso Maximo</label>
            <input name="maxWeight" type="number" placeholder="Peso Maximo..." required>
            <label>Peso Minimo</label>
            <input name="minWeight" type="number" placeholder="Peso Minimo..." required>
            <button>ENVIAR</button>
        </form>
        <form action="editWeightclass" method=POST>
            <h2>Editar Categoria</h2>
            <select name= "id">
                {foreach from=$weightclasses item=weightclass}
                    <option value='{$weightclass->weightClass_id}'>{$weightclass->weightClassName}</option>
                {/foreach}
            </select>
            <label>Categoria</label>
            <input name="weightclass" type="text" placeholder="Categoria..." required>
            <label>Peso Maximo</label>
            <input name="maxWeight" type="number" placeholder="Peso Maximo..." required>
            <label>Peso Minimo</label>
            <input name="minWeight" type="number" placeholder="Peso Minimo..." required>
            <button>ENVIAR</button>
        </form>
        <form action="deleteWeightclass" method=POST>
            <h2>Borrar Categoria</h2>
            <select name= "weightclass">
                {foreach from=$weightclasses item=weightclass}
                    <option value='{$weightclass->weightClass_id}'>{$weightclass->weightClassName}</option>
                {/foreach}
            </select>
            <button>ENVIAR</button>
        </form>
    </div>
</div>

{include file="footer.tpl" }
