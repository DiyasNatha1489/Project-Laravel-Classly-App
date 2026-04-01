<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Classly Apps')</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
        }
        
        x-sidebar,
        /* .sidebar {
            width: 260px;
            flex: 0 0 260px;
            background: #f9f9f9;
            border-right: 1px solid #ddd;
        } */

        .right-column {
            display: flex;
            flex-direction: column;
            flex: 1;
            min-width: 0;
            padding: 0;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            /* background: #fff; */
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,.1);
            overflow: auto;
        }
    </style>
</head>
<body>
    <x-sidebar />

    <div class="right-column">
        <x-chart-section />
        <x-stat-card />

        <nav class="main-content">
            @yield('content')
        </nav>
    </div>
</body>
</html>