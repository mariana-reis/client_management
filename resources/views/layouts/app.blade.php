<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciamento de Clientes</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:styles />
</head>
<body>
    {{ $slot }}

    <livewire:scripts />
    <wireui:scripts />
    <script src="http://unpkg.com/alpinejs" defer></script>
</body>
</html>
