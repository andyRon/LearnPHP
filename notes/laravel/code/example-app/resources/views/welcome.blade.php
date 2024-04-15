<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <h1> 我的欢迎页面 {{ time()  }}  {{ isset($name) ? $name : 'de'  }} </h1>

    <a href="{{ $siteUrl }}">{{ $siteName }}</a>
    </body>
</html>
