<?php require("app/views/partials/menu.php") ?>


<h1>Tasks</h1>

    <ul>
        <?php foreach ($tasks as $task) : ?>

            <li>

                <?= $task->name ;?>


            </li>



        <?php endforeach; ?>
    </ul>

<?php require("app/views/partials/footer.php") ?>