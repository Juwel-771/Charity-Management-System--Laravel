<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Become a donor</title>
</head>
<body>
    <h3>Registration of donor:</h3> <br>
    <form action="" method="POST">
        @csrf
        <label for="name">Name: </label><br>
        <input type="text" name="name"><br>
        <label for="email">Email: </label>
        <input type="email" name="email"><br>
        <label for="details">About: </label><br>
        <input type="text" name="details"><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>