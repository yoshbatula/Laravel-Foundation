<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navigation">
        <div class="navigation-container">
            <ul>
                <a href="/welcomepage">Home</a>
                <a href="/aboutpage">About</a>
                <a href="/contactpage">Contact</a>
            </ul>
        </div>
    </nav>
    <h1>This is the home page</h1>
</body>
</html>