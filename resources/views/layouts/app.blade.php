<!DOCTYPE html>
<html>
<head>
    <title>Laravel To-Do List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">To-Do List</a>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>