<html>

<head>
    <meta charset="ulf-8" />
    <title>Multiplication</title>
</head>

<body>
    <?php $myinput; ?>
    <center>
        <br><br><br>
        <B>
            <h1>ตารางสูตรคูณแม่ <?php echo $myinput; ?></h1>
        <div class="table">
            <?php
            if (!empty($myinput)) {
                for ($i = 1; $i <= 24; $i++) {
                    echo '<p>';
                    echo "&nbsp;$myinput x {$i} = " . $myinput * $i . '<br/>';
                    echo '</p>';
                }
            }
            ?>
        </div>
        </B>
        <br>
        <form method="post" action="/my-page">
            @csrf
            <button type="submit">Back</button>
        </form>
    </center>
</body>
<style>
    .table {
        width: 500px;
        height: 530px;
        border: 1px solid black;
        overflow: auto;
        background-image: url();
        background-position: center;
        background-size: cover;
        text-shadow: 5px 5px 5px black;
        color: whitesmoke;
        font-size: 20px;
        font-family: Verdana;
        background-image: url(https://i.pinimg.com/originals/4e/df/0c/4edf0c16b629c17da083a80016cebc04.gif);
    }
    body{
        background-image: url(https://i.pinimg.com/originals/38/d3/0e/38d30ecfe41c21551c043443d330d637.gif);
        background-repeat: no-repeat;
        background-size: cover;
    }
    h1{
        color: whitesmoke;
        text-shadow: 5px 5px 5px blue;
    }
</style>

</html>
