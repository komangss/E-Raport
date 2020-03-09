<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="<?= BASEURL ?>/auth/login" method="POST">
        <input type="text" name="username" placeholder="nis / nip" required>
        <input type="password" name="password" placeholder="password" required>
        <select name="role" id="selectRole" required>
            <option value="">-</option>
            <option value="1">siswa</option>
            <option value="2">guru</option>
        </select>
        <button type="submit">login</button>
    </form>
</body>
</html>