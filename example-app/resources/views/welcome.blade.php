<!DOCTYPE html>

<head>
    <title>Javascript 101</title>
    <style>
        body {
            font-family: Verdana;
            background-color: whitesmoke;
        }

        #table {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: pink;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: black;
        }

        label {
            font-weight: bold;
        }

        button {
            padding: 10px;
            margin: 5px;
            border: none;
            border-radius: 5px;
        }

        #summit {
            background-color: green;
            color: #fff;
            cursor: pointer;
        }

        #summit:hover {
            background-color: green;
        }

        #clear {
            background-color: #dd191d;
            color: #fff;
            cursor: pointer;
        }

        #clear:hover {
            background-color: #b0120a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        th {
            font-size: 120%;
            color: black;

        }

        #my_number {
            border: 1px  whitesmoke;
            padding: 8px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <center>
        <div id="table">
            <h1>Multiplication Calculator</h1>
            <div>
                <label for="number">Input Number : </label>
                <input type="text" id="my_number">
                <button id="summit" class="summit">Submit</button>
                <button id="clear" class="clear">Clear</button>
            </div>
            <div id="answer"></div>
        </div>
    </center>
    <script>
        $(document).ready(function() {
            $("#summit").click(function() {
                let number = $("#my_number").val();
                if (number !== "" && !isNaN(number)) {
                    multi(parseInt(number));
                } else {
                    alert("ได้โปรดกรอกค่าที่เป็นตัวเลข!!!!!");
                }
            });

            $("#clear").click(function() {
                clearTable();
            });

            function clearTable() {
                $("#my_number").val("");
                $("#answer").empty();
            }

            function multi(number) {
                let result = "<table><thead><tr><th>สูตรคูณแม่ " + number + "</th></tr></thead><tbody>";
                for (let i = 1; i <= 24; i++) {
                    result += "<tr><td>" + number + " x " + i + " = " + (number * i) + "</td></tr>";
                }
                result += "</tbody></table>";
                $("#answer").html(result);
            }
        });
    </script>
</body>

</html>
