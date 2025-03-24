<?php
include_once "index.php";

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>To-Do App</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <div class="container">
            <div class="task-card">
                <h1>To-Do App</h1>
                <!-- Add Task Form -->
                <form method="POST">
                    <div class="row">
                        <div class="column column-75">
                            <input type="text" name="task" placeholder="Enter a new task" required>
                        </div>
                        <div class="column column-25">
                            <button type="submit" class="button-primary">Add Task</button>
                        </div>
                    </div>
                </form>
                <!-- Task List -->
                <h2>Task List</h2>
                <ul style="list-style: none; padding: 0;">
                    <!-- TODO: Loop through tasks array and display each task with a toggle and delete option -->
                    <!-- If there are no tasks, display a message saying "No tasks yet. Add one above!" -->
                    <?php if (empty($tasks)): ?>
                        <li>No tasks yet. Add one above!</li>
                        <!-- if there are tasks, display each task with a toggle and delete option -->
                    <?php else: ?>
                        <?php foreach ($tasks as $index => $task): ?>
                            <li class="task-item">
                                <form method="POST" style="flex-grow: 1;">
                                    <input type="hidden" name="toggle"
                                           value="<?= $index ?>">
                                    <button type="submit"
                                            style="border: none; background: none; cursor: pointer; text-align: left; width: 100%;">
                                        <span class="<?= $task['done'] ? 'task-done' : 'task' ?>"> <?= $task['task'] ?>
                                        </span>
                                    </button>
                                </form>
                                <form method="POST">
                                    <input type="hidden" name="delete" value="<?= $index ?>">
                                    <button type="submit" class="button button-outline"
                                            style="margin-left: 10px;">Delete</button>
                                </form>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </body>

</html>