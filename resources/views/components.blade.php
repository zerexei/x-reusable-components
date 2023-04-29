<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Vue - Tailwindcss Components</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div id="App" class="max-w-7xl mx-auto p-6 lg:p-8">
        <h1 class="mb-12 text-4xl font-bold">Laravel - Vue - Tailwindcss Componets</h1>

        <section class="min-h-screen p-4 border-4 border-dashed border-green-400">

                <div class="text-center">
                    <p class="text-4xl font-semibold text-rose-400">404</p>
                    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page not found</h1>
                    <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we couldn’t find the page you’re looking
                        for.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go
                            back home</a>
                        <a href="#" class="text-sm font-semibold text-gray-900 hover:underline">Contact support <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>

        </section>
    </div>
</body>

</html>
