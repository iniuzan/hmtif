<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="/image/LOGO HMTIF.png" type="image/x-icon">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>HMTIF - UNPAS</title>
    
</head>
<body class="h-full">
<div class="min-h-full">
    <x-navbar></x-navbar>

    <x-header>{{ $title }}</x-header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        {{ $slot }}
      </div>
    </main>
  </div>
</body>
</html>