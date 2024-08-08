<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>
