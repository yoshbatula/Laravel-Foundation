<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
</head>
<body class="bg-black">
    <div class="container">
        <div class="login-container text-white ml-[46%] mt-[20%] border-2 border-pink-5">
            <form action="{{url('/welcomepage')}}" class="login">
                <label for="email">Email: </label><br>
                <input class="text-black" type="email" name="email" required><br>
                <label for="password">Password</label><br>
                <input class="text-black" type="password" name="password"><br><br>
                <input class="border-2 border-white " type="submit" value="submit">
            </form>
        </div>
    </div>
</body>
</html>