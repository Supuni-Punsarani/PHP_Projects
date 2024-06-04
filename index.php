<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="formhandler.php" method="post">
            <label for="firstname">First Name:</label>
            <input id="firstname" type="text" name="firstname" placeholder="first name">
            <br>
            <br>
            <label for="lastname">Last Name:</label>
            <input id="lastname" type="text" name="lastname" placeholder="last name">
            <br>
            <br>
            <label for="favouritepet">favourite pet</label>
            <select id="favouritepet" name="favouritepet">
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
                <option value="none">None</option>
            </select>
            <br>
            <br>
            <button type="submit" name="submit">Submit</button>


        </form>
    </main>
</body>

</html>