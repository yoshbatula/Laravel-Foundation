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
        <div class="bg-blue text-white border-2 border-white mx-auto w-[20%] mt-[17%]">
            <form action="{{url('/welcomepage')}}" class="login">
                <label for="email">Email: </label><br>
                <input class="text-black" type="email" name="email" required><br>
                <label for="password">Password</label><br>
                <input class="text-black" type="password" name="password"><br><br>
                <input class="mx-auto border-2 border-white" id="submit" type="submit" value="submit">
            </form>
        </div>
</body>
</html>