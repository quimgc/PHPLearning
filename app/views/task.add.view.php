<?php require("app/views/partials/menu.php") ?>


<h1>Digue'm quina tasca vols afegir</h1>

<form action="/task" method="POST">

    Name: <input type="text" name="name">

    <input type="submit" value="Afegir">

</form>

<?php require("app/views/partials/tasks.view.php") ?>