<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>14januar</title>
</head>

<body>
    <?php
    // Функции завиясящие от условий
    
    $makefoo = true;
    //Мы не можем вызвать функцию foo() в этом месте, поскольку она ещё не определена,
    // но мыможем обратится к bar()
    bar();

    if ($makefoo) {
        function foo()
        {
            echo "I don't exist until program execution reaches me. \n";
        }
    }

    // Теперь мы благополучно можем вызывать foo(),
    // Поскольку $makefoo была интерпретирована как true
    if ($makefoo) foo();

    function bar()
    {
        echo "I exist immediately upon program start. \n";
    }

    ?>
</body>

</html>