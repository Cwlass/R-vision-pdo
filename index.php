<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <form action="" method="POST">


        <input class="input" type="text" name="name" placeholder="Enter name"><br>
        <?php if (isset($errors['name'])) echo $errors['name'] ?>

        <input type="number" name="price" id="" step="0.01">
        <?php if (isset($errors['price'])) echo $errors['price'] ?>

        <input class="button" type="submit" name="btnReg" value="Add Flower">
    </form>
    <div class="errors">

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $(".button").click(function(e) {
                e.preventDefault();
                $.ajax({
                        url: "query.php",
                        method: 'post',
                        data: $('form').serialize(),
                    })
                    .done(function(result) {
                        $('.errors').html(result);
                    })
            })
        })
    </script>
</body>

</html>