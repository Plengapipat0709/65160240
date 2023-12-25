<meta charset="utf-8">
    <link rel="stylesheet" href="styleindex.css" />
</head>

<body>
    <center>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <style>
        .scroll {
            width: 500px;
            height: 500px;
            border: 1px solid black; 
            overflow:auto; 
        }
    </style>
    <div class="scroll">
            <tr>
            <?php
            if( !empty($multi_x) ) {
        for( $i=1; $i<=24; $i++ ) {
            echo"<p>";
            echo "&nbsp;$multi_x x {$i} = ".( $multi_x *$i)."<br/>";
            echo"</p>";
        }
    }
    ?>       
    </div>
    </center>
</body>
</html>