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

        .bug {
            border: 1px solid red;
        }
    </style>
</head>

<body class="antialiased">
    <div id="App" class="max-w-7xl mx-auto p-6 lg:p-8">
        <h1 class="mb-12 text-4xl font-bold">Laravel - Vue - Tailwindcss Componets</h1>

        <section class="min-h-screen p-4 border-4 border-dashed border-green-400">

            <div class="mt-6 flex max-w-md gap-x-4">
                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required
                    class="min-w-0 flex-auto rounded border px-3.5 py-2 shadow-sm" placeholder="Enter your email">
                <button type="submit"
                    class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 border focus:ring focus:ring-indigo-400">
                    Subscribe
                </button>
            </div>

        </section>
    </div>
</body>

</html>
