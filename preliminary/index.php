<!-- 
* The above code is a simple PHP To-Do App that allows users to add, toggle, and delete tasks stored * in a JSON
file. * * @param tasks The code you provided is a simple To-Do App implemented in PHP. Users can add tasks, * mark tasks
as done, and delete tasks. The tasks are stored in a JSON file named `tasks.json`.   -->
<?php

define('TASKS_FILE', 'tasks.json');

function saveTasks($tasks)
{
    file_put_contents(TASKS_FILE, json_encode($tasks, JSON_PRETTY_PRINT));
}
function loadTasks()
{
    if (!file_exists(TASKS_FILE)) {
        return [];
    }
    $data = file_get_contents(TASKS_FILE);

    return $data ? json_decode($data, associative: true) : [];
}

$tasks = loadTasks();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['task']) && !empty(trim($_POST['task']))) {
        $tasks[] = [
            'task' => htmlspecialchars(trim($_POST['task'])),
            'done' => false
        ];
        saveTasks($tasks);
        header('location:' . $_SERVER['PHP_SELF']);
        exit;
    } else if (isset($_POST['delete'])) {
        unset($tasks[$_POST['delete']]);
        saveTasks($tasks);
        header('location:' . $_SERVER['PHP_SELF']);
        exit;
    } else if (isset($_POST['toggle'])) {
        $tasks[$_POST['toggle']]['done'] = !$tasks[$_POST['toggle']]['done'] ;
        saveTasks($tasks);
        header('location:' . $_SERVER['PHP_SELF']);
        exit;
    }


}

include_once('includes/template.php');

?>