<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actidad 4</title>
</head>

<body>
    <h1 id="samu">soy una simple pagina¡¡¡¡ :V</h1>
    <button id="btnrojo" style="background-color:  red ;" onmouseover="rojo()">Red</button>
    <button id="btnazul" style="background-color:  blue ;" onmouseover="azul()">Blue</button>
    <button id="btnverde" style="background-color:  green ;" onmouseover="verde()">Green</button>
-

    <script>
        function rojo() {
            //alert("outch soy rojo")
            document.getElementById("samu").style.backgroundColor ="red";
        }

        function azul() {
            //alert("outch soy azul")
            document.getElementById("samu").style.backgroundColor ="blue";
        }

        function verde() {
            //alert("outch soy verde")
            document.getElementById("samu").style.backgroundColor ="green";
        }
    </script>
</body>

</html>