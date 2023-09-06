<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>

<body>
    <form action="/target" method="post">
        {{ csrf_field() }}
        <p>
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname">
        </p>
        <p>
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname">
        </p>
        <p>
            <input type="submit" value="Kirim">
        </p>
    </form>
</body>

</html>
