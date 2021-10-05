<div class="">
    <button class=""><a href='fighters'>Volver </a></button>
    <ul>
        <img src="images/fightersImg/{$fighter->id_fighter}.png" alt="foto:{$fighter->name}">
        <li>Nombre: {$fighter->name}</li>
        <li>Apodo: {$fighter->nickname}</li>
        <li>Nacionalidad: {$fighter->nationality}</li>
        <li>Edad: {$fighter->age}</li>
        <li>Record: {$fighter->record}</li>
        <li>Altura (cm): {$fighter->height}</li>
        <li>Peso (kg): {$fighter->weight}</li>
    </ul>
</div>