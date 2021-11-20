{include file="header.tpl" }

<div class="fighterWraper">
    <button><a href='fighters'><img src="images/botonBack.png" alt="Volver"></a></button>
    <div class="listWraper">
        <ul>
            <img src="images/fightersImg/{$fighter->id_fighter}.png" alt="foto:{$fighter->name}">
            <li>Nombre: {$fighter->name}</li>
            <li>Apodo: {$fighter->nickname}</li>
            <li>Categoria: {$fighter->weightClassName}</li>
            <li>Nacionalidad: {$fighter->nationality}</li>
            <li>Edad: {$fighter->age}</li>
            <li>Record: {$fighter->record}</li>
            <li>Altura (cm): {$fighter->height}</li>
            <li>Peso (kg): {$fighter->weight}</li>
        </ul>
    </div>
    <form>
        <div id="commentsWrapper">
            <div>
                <textarea id="commentIput" rows="5" cols="110" placeholder="Escribir comentario (max 400 caracteres)"> </textarea>
            </div>
            <label for="score">Puntaje</label>
            <select id="scoreInput">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input id="idFighterInput" type="hidden" value="{$fighter->id_fighter}">
            <button id="addComment">Agregar</button>
        </div>
    </form>
</div>

{include file="footer.tpl" }