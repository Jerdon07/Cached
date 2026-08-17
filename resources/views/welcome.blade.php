<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cached</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-white dark:bg-gray-950 text-gray-900 dark:text-gray-100 antialiased">
    <div class="flex min-h-full flex-col">
        <header class="flex items-center justify-between px-6 py-5 sm:px-10">
            <span class="text-sm font-semibold tracking-wide text-gray-500 dark:text-gray-400">Cached</span>
            <a href="{{ route('filament.app.auth.login') }}"
               class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-500 transition">
                Sign in
            </a>
        </header>

        <main class="flex flex-1 flex-col items-center justify-center px-6 text-center">
            <h1 class="text-3xl font-semibold sm:text-4xl">
                CACHED
            </h1>
            <p class="mt-4 max-w-xl text-gray-600 dark:text-gray-400">
                A centralized Inventory & Warehouse Management platform for product catalogs, multi-warehouse stock,
                purchasing, receiving, sales orders, and full audit logging —
                built with Laravel and Filament.
            </p>

            <div class="mt-8 grid grid-cols-2 gap-4 text-left sm:grid-cols-3 max-w-2xl">
                @foreach ([
                    'Catalog' => 'Products, categories, brands, units',
                    'Warehousing' => 'Multi-location stock tracking',
                    'Purchasing' => 'Orders, approvals, goods receiving',
                    'Inventory' => 'Movements, adjustments, transfers',
                    'Sales' => 'Customer orders and fulfillment',
                    'Reports' => 'Valuation, low stock, activity',
                ] as $title => $desc)
                    <div class="rounded-lg border border-gray-200 dark:border-gray-800 p-4">
                        <p class="text-sm font-medium">{{ $title }}</p>
                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </main>

        <footer class="px-6 py-5 text-center text-xs text-gray-400 dark:text-gray-600">
            Built with Laravel {{ app()->version() }} & Filament
        </footer>
    </div>
</body>
</html>