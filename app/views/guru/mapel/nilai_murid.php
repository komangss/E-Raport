<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Murid</title>
</head>

<body>
    <button id="test_fetch">fetch!</button>
</body>
<script>
    document.getElementById('test_fetch').addEventListener('click', function() {
        testFetch().then(data => console.log(data))
        testFetch().then(data => data.text().then(res => console.log(res)))

    })

    async function testFetch() {
        let response = await fetch('http://localhost/E-Raport/mapel/test_fetch');
        // let data = await response.json()
        return response;
    }
</script>

</html>