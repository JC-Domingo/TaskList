<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Vue Task App</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
    </head>
    <body>
        <div class="container" id="root">
            <task-list></task-list>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
