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
        <div id="commentFormWrapper" data-user="{$user["user"]}"{if $user["user"]==null}class="hide"{/if}>
            <form id="API_comment">
        
                <textarea name="commentIput" rows="5" cols="110" placeholder="Escribir comentario (max 400 caracteres)"></textarea>
                <div class="commentsScoreWrapper">  
                    <label for="score">Puntaje</label>
                    <select name="score">
                        <option value="0">seleccionar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input id="idFighterInput" type="hidden" name="id_fighter" value="{$fighter->id_fighter}">
                    <input id="idUserInput" type="hidden" name="id" value="{$user["id"]}">
                    <input type="submit" value="Enviar" id="btn-addComment">
                </div>
    
            </form>
        </div>
    
    <div id= "comments" class="listOfCommentsWrapper">
        <table>
            <thead>
                <tr>
                    <th>Comentario</th>
                    <th>Puntaje</th>
                </tr>
            </thead>

            <tbody class="commentsBody">
                    {include file="vue/commentsList.tpl" }
            </tbody>
        </table>
        <button><a href='fighters'><img src="images/botonBack.png" alt="Volver"></a></button>
    </div>
</div>

<script src= "./js/comments.js"></script> 
{include file="footer.tpl" }