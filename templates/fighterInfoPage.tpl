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
</div>