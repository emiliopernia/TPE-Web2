<div class="formEdit">
    <form action="editFighter/{$fighter->id_fighter}" method=POST>
        <h2>Agregar Peleadores</h2>
        <label>Nombre y Apellido</label>
        <input name="name" type="text" value={$fighter->name} required>
        <label>Apodo</label>
        <input name="nickname" type="text" value={$fighter->nickname} required>
        <label>Nacionalidad</label>
        <input name="nationality" type="text" value={$fighter->nationality} required>
        <label>Edad</label>
        <input name="age" type="number" value={$fighter->age} required>
        <label>Record</label>
        <input name="record" type="text" value={$fighter->record} required>
        <label>Altura</label>
        <input name="height" type="number" value={$fighter->height} required>
        <label>Peso</label>
        <input name="weight" type="number" value={$fighter->weight} required>
        <label>Categoria</label>
        <select name= "weightclass">
            {foreach from=$weightclasses item=weightclass}
                <option value='{$weightclass->weightClass_id}'>{$weightclass->weightClassName}</option>
            {/foreach}
        </select>
        <label>Ranking</label>
        <input name="rank" type="number" value={$fighter->weightClassRank} required>
    
        <button>CARGAR</button>        
    </form>   
    
</div>