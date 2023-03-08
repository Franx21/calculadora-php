<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CALCULADORA</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="grid place-items-center h-screen">
        <div class="grid grid-cols-2 max-w-sm">
            <div class="grid grid-cols-4 text-white bg-white dark:bg-gray-800 dark:border-gray-700">
                <input type="text" id="resultado"
                    class="items-end text-right max-w-sm p-3 col-span-4 h-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="RESULTADO">
                <button
                    class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">7</button>
                <button
                    class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">8</button>
                <button
                    class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">9</button>
                <div class="grid row-span-4 text-white bg-white border shadow dark:bg-gray-800 dark:border-gray-700">
                    <button
                        class="max-w-sm  bg-white hover:bg-red-700 border dark:border-red-700 dark:bg-red-800 dark:hover:bg-red-700">DEL</button>
                    <button
                        class="max-w-sm bg-white hover:bg-gray-600 border dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-grey-600">/</button>
                    <button
                        class="max-w-sm bg-white hover:bg-gray-600 border dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-grey-600">*</button>
                    <button
                        class="max-w-sm bg-white hover:bg-gray-600 border dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-grey-600">-</button>
                    <button
                        class="max-w-sm bg-white hover:bg-gray-600 border dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-grey-600">+</button>
                </div>
                <button
                    class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">4</button>
                <button
                    class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">5</button>
                <button
                    class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">6</button>
                <button
                    class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">1</button>
                <button
                    class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">2</button>
                <button
                    class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">3</button>
                <button
                    class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">.</button>
                <button
                    class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">0</button>
                <button
                    class="max-w-sm p-3 bg-white hover:bg-green-700 border dark:border-green-700 dark:bg-green-800 dark:hover:bg-green-700">=</button>
            </div>
        </div>
    </div>
</body>

</html>
*