<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taskE</title>
</head>
<body>

<h1>Task For The Day</h1>

    <ul>
        <li>
            <strong>Name: </strong> <?= $task['title']; ?>
        </li>

        <li>
            <strong>Due Date: </strong> <?= $task['due']; ?>
        </li>

        <li>
            <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
        </li>

        <li>

            <!-- true ? 'do something' : 'do something else' -->

            <strong>Status: </strong>
            
            <?php if ($task['completed']) : ?>

                <span class="icon">&#9989;</span>

            <?php else : ?>

                <span class="icon">Incomplete</span>

            <?php endif; ?>

        </li>

        <li>

            <strong>Second Bool: </strong>
            
            <?php if ($task['second_bool']) : ?>

                <span class="icon">&#9989;</span>

            <?php else : ?>

                <span class="icon">&#10060;</span>

            <?php endif; ?>

        </li>

    </ul>
    
</body>
</html>