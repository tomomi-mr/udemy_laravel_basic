<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <!-- スロット…ヘッダー・フッター共通の箇所をまとめたり、一部だけ他の表示に差し替えたりできる機能 -->
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <!-- $slotにresources\views\auth\login.blade.phpの内容が差し込まれる -->
            {{ $slot }}
        </div>
    </body>
</html>
