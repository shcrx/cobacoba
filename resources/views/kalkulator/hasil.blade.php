<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR FEBI</title>
    <style>
        body {
            background-image: black ;
        }
        table {
            border: none;
            margin-left: auto;
            margin-right: auto; 
            border-collapse: collapse;
            border: none;
            outline: solid black;
            border-radius: 10px;
            background-color:Teal;
            width: 200px;
            box-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0.5);
            
        }
        td {
            width: 100px;
            padding: 25px;
        }
        tr {
            width: 100px;
            padding: 25px;
        }
        input[type="submit"]{
            width: 100%;
            padding: 20px 40px;
            background-color: #BC8F8F;
            color:#FFF5EE;
            margin-bottom: 10px;
            border: none;
            border-radius: 20px;
            font-weight:bold;
            font-size: large;
        }
        }
        input[type="submit"]:hover {
            background-color: black;
        }
        input[type="reset"]{
            width: 100%;
            padding: 20px 20px;
            background-color: #BC8F8F;
            color:white;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            font-weight:bold;
            font-size: large;
        }
        input[type="reset"]:hover {
            background-color: black;
        }
        input[type="number"]{
            width: 80%;
            padding: 10px;
            border: 2px solid black;
            border-radius: 30px;
            box-shadow: inset;
            text-align: justify;
        }
    </style>
</head>
<body>
<h1><center>KALKULATOR FEBI</center></h1>
    <center>
    <form action=" {{ route('proses.store') }} " method="post">
        @csrf
    <table border=1 width=300>
        <tr>
            <td colspan=2><input type="number" name="a" id=""></td>
            
            <td colspan=2 rowspan=2><input type="reset" value="Reset" name="op"></td>
            
        </tr>
        <tr>
            <td colspan=2><input type="number" name="b" id=""></td>
            
        </tr>
        <tr>
            <td colspan=4>HASIL : {{ $hasil }}</td>
            
        </tr>
        <tr>
            <td><input type="submit" value="+" name="op"></td>
            <td><input type="submit" value="-" name="op"></td>
            <td><input type="submit" value="x" name="op"></td>
            <td><input type="submit" value="/" name="op"></td>
        </tr>
        <tr>
            <td colspan=4><center>
                Nama : FEBI FEBRIANTI
                <br>
                Kelas : XII PPLG 2
    </center>
            </td>
            
        </tr>
      
</center>
<br>
</body>
</html>