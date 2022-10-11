<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taskD</title>
</head>
<body>

    <ul>
        <!-- assign key/value -->
        <?php foreach ($task as $key => $val) :?>
            <li><em><?= $key; ?>:</em> <?= $val; ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>