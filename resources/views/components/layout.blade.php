<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>YourArticle</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        footer {
            background: #f8f9fa; /* Optional: Add a background color for visibility */
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="content">
        <x-navbar></x-navbar>
        {{-- <x-header>{{ $title }}</x-header> --}}
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                {{ $slot }}

            </div>
        </main>
    </div>

    
    <footer>
        <p class="copyright">
            Copyright © 2024 Made withDamar setiawan 
        </p>
    </footer>
</body>
</html>
