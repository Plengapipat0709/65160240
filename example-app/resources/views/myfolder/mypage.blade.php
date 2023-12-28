<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Multiplication</title>
</head>

<body>
    <center>

        <form method="post" action="/my-route">
            <h1>Multiplication Calculator</h1>
            @csrf
            <input type="text" name="myinput">
            <br><br>
            <button type="submit">Submit</button>
        </form>

    </center>
</body>
<style>
    body {
        background-image: url(https://i.pinimg.com/originals/f0/4a/0f/f04a0f964e22f64a08e892c9496f1864.gif);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }

    h1 {
        margin-top: 15%;
        color: whitesmoke;
        font-size: 50px;
    }
</style>

</html>
