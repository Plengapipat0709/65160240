{{-- <!doctype html>
<html>

<head>
    <title>Javascript 101</title>
</head>

<body>
    <h1 id="myh1">
    </h1>
    <button onclick="alert('Hello World!')">Click Me!</button>
    <input type="text" id="my_number" value="10">
    <button onclick="myFunction()">submit number</button>
    <br>
    <br>
    <button onclick="myFunction2()">submit my function2</button>
    <br>
    <table id="my_table">
        <thead>
            <tr>
                <td>#</td>
                <td>result</td>
            </tr>
        </thead>
        <tbody id="my_tbody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Hello World - document.ready")
            console.log($('#myh1').text())
            console.log($('#my_number').val())
            $('#myh1').text("แม่สูตรคูณ")
            $('#my_number').val(24)
            // setInterval(() => {
            //     $('#myh1').after(`<h1 class="my_gen_number">setInterval</h1>`)
            // }, 2000);
        });

        function myFunction2() {
            // $($('#my_table').children()[1]).html("<tr><td>1</td><td>test</td></tr>")
            let my_number = parseInt($('#my_number').val())
            let my_code_tr = ``
            for (let i = 1; i <= 24; i++) {
                my_code_tr += "<tr><td>" + my_number + " x " + i + " = " + (my_number * i) + "</td></tr>";
            }
            $('#my_tbody').html(my_code_tr)
        }

        function myFunction() {
            let my_number = parseInt($('#my_number').val())
            for (let i = 0; i < my_number; i++) {
                $('#myh1').after(`<h1 class="my_gen_number">${i}</h1>`)
            }
            console.log(document.getElementById('my_number').value);
            console.log('Click submit number')

            setTimeout(function() {
                $('.my_gen_number').each(function(index, val) {
                    $(val).remove();
                    //val.remove()
                })
            }, 2000);

        }
        console.log("Hello World!")
        let myval;
        console.log(typeof myval);
        myval = '10';
        myval2 = '2';
        console.log(myval, myval2);
        myval3 = parseInt(myval) + myval2;
        console.log(myval3)
        myval3 = myval - myval2;
        console.log(myval3)
        myval3 = myval * myval2;
        console.log(myval3)
        myval3 = myval / myval2;
        console.log(myval3)
    </script>
    <script>
        let myval4 = [1, 2, 3, 4];

        myval4[5] = 5;
        myval4[6] = [6, 5, 4, 5]
        console.log(myval4)

        for (i = 0; i < myval4.length; i++) {
            console.log("in for", myval4[i])
        }
        myval4.forEach(function(value, index) {
            console.log("in forEach", value, index)
        });

        console.log(document.getElementById('myh1').innerHTML)
        /*
        // php
        foreach($myval4 as $index => $value){

        }
        */
    </script>

</body>

</html> --}}


<!DOCTYPE html>

<head>
    <title>Javascript 101</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            color: #333;
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
            border: 1px solid black;
        }

        th {
            background-color: black;
            color: #fff;
        }

        #my_number {
            border: 1px solid #000;
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




{{--
<!DOCTYPE html>

<head>
    <title>Javascript 101</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <center>
        <h1> ตารางสูตรคูณแม่ </h1>
    </center>
    <center>
        <div>
            <label for="number">กรอกค่าตัวเลข : </label>
            <input type="text" id="my_number">
            <button id="summit">ตกลง</button>
            <button id="clear">ลบทิ้ง</button>
        </div>
        <table id="my_table">
            <tbody id="answer"></tbody>
        </table>
    </center>
    <script>
        $(document).ready(function() {
            $("#summit").click(function() {
                let number = $("#my_number").val();
                let result = "<tr><th>สูตรคูณแม่ " + number + "</th></tr>";
                for (let i = 1; i <= 24; i++) {
                    result += "<tr><td>" + number + " x " + i + " = " + (number * i) + "</td></tr>";
                }
                $("#answer").html(result);

            });

            $("#clear").click(function() {
                clearTable();
            });

            function clearTable() {
                $("#my_number").val("");
                $("#answer").empty();
            }
        });
    </script>


</body>

</html>

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript 101</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        #container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        button {
            padding: 10px;
            margin: 5px;
            border: none;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
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
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <center>
        <h1> ตารางสูตรคูณแม่ </h1>
    </center>
    <center>
        <div>
            <label for="number">กรอกค่าตัวเลข : </label>
            <input type="text" id="my_number">
            <button id="summit">ตกลง</button>
            <button id="clear">ลบทิ้ง</button>
        </div>

        <div id="answer">
            <!-- ตำแหน่งแสดงข้อมูล multi(number) -->
        </div>
    </center>
    <script>
        $(document).ready(function() {
            $("#summit").click(function() {
                let number = $("#my_number").val();
                if (number !== "" && !isNaN(
                        number)) { // isNaN(number) ตรวจสอบตัวเลขเพื่อคืนค่า true ที่รับเข้ามาเป็นตัวเลข
                    multi(parseInt(number)); //number !== "" ตรวจสอบว่าตัวแปร number ไม่เป็นสตริงว่าง
                } else {
                    alert("ได้โปรดกรอกค่าที่เป็นตัวเลขเท่านั้น!!!");
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
                // let result = "<tr><th>สูตรคูณแม่ " + number + "</th></tr>";
                let echo = ``
                result = "<tr><th>สูตรคูณแม่ " + number + "</th></tr>";
                for (let i = 1; i <= 24; i++) {
                    result += "<tr><td>" + number + " x " + i + " = " + (number * i) + "</td></tr>";
                }
                $("#answer").html(result);
            }
        });
    </script>


</body>

</html> --}}
