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
    <form action="{{ route('calculadora.calculate') }}" method="POST">
        @csrf
        <div class="grid place-items-center h-screen">
            <div class="grid grid-cols-2 max-w-sm">
                <div class="grid grid-cols-4  text-white bg-white dark:bg-gray-800 dark:border-gray-700">
                    <div
                        class="grid grid-cols-3 grid-rows-2 text-black max-w-sm p-1 col-span-4 h-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <input type="text" class="text-right" name="number1" id="number1" placeholder="numero 1">
                        <input type="text" class="text-center" name="operador" id="operador" placeholder="operador">
                        <input type="text" class="text-left" name="number2" id="number2" placeholder="numero 2">
                        <input type="text" class="col-span-3 text-right" name="resultado" id="resultado" placeholder="= {{ $resul }}">
                    </div>
                    <button
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">7</button>
                    <button
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">8</button>
                    <button
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">9</button>
                    <div
                        class="grid row-span-4 text-white bg-white border shadow dark:bg-gray-800 dark:border-gray-700">
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
                    type="submit" class="max-w-sm p-3 bg-white hover:bg-green-700 border dark:border-green-700 dark:bg-green-800 dark:hover:bg-green-700">=</button>
                </div>
            </div>
        </div>
</body>

</html>
</form>
