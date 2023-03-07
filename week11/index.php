<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <td>id</td>
            <td>password</td>
        </thead>
        <tbody id="info">
        </tbody>
    </table>
    <button type="button" onclick="loaddata()">test</button>
</body>

</html>

<script>
    function loaddata() {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let data = JSON.parse(this.responseText);

                for (let i = 0; i < data.length; i++) {
                    document.getElementById('info').innerHTML+=
                    `<tr>
                        <td>${data[i].id}</td>
                        <td>${data[i].password}</td>
                    </tr>`;
                }

            }
        }
    document.getElementById('info').innerHTML='';
    xhttp.open("GET", 'control.php', true);
    xhttp.send();
    }
</script>