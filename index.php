<!DOCTYPE HTML>
<html lang = "pl">
<head>
    <meta charset = "utf-8"/>
    <script type="text/javascript">

        function sprawdz()

        {
var liczba = document.getElementById("pole").value;
document.write(liczba);
        }

    </script>
</head>

<body>

<input type = "text" id="pole"/>
<input type ="submit" value = "Sprawdz" onclik = "sprawdz()"/>

</body>
</html>
