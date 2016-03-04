<html>
<head>
    <title>My Blog</title>
</head>
<body>
<h1>Welcome to my Blog!</h1>
<ul>
    <?php foreach ($todo_list as $item):?>

        <li><?php echo $item;?></li>

    <?php endforeach;?>
</ul>
</body>
</html>