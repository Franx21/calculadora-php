<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CALCULADORA</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-sky-500 to-indigo-500">
    <form action="{{ route('calculadora.calculate') }}" method="POST">
        @csrf
        <div class="grid place-items-center h-screen">
            <div class="grid grid-cols-2 max-w-sm">
                <div class="grid grid-cols-4  text-white bg-white dark:bg-gray-800 dark:border-gray-700">
                    <div
                        class="grid grid-cols-3 grid-rows-2 text-black max-w-sm p-1 col-span-4 h-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <input type="text" class="col-span-3 row-span-2 text-right" name="input" value="@php echo @$num @endphp">
                    </div>
                    <input type="submit" value="7" name="num"
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">
                    <input type="submit" value="8" name="num"
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">
                    <input type="submit" value="9" name="num"
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">
                    <div
                        class="grid row-span-4 text-white bg-white border shadow dark:bg-gray-800 dark:border-gray-700">
                        <input type="submit" value="del" name="del"
                            class="max-w-sm  bg-white hover:bg-red-700 border dark:border-red-700 dark:bg-red-800 dark:hover:bg-red-700">
                        <input type="submit" value="/" name="op"
                            class="max-w-sm bg-white hover:bg-gray-600 border dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-grey-600">
                        <input type="submit" value="*" name="op"
                            class="max-w-sm bg-white hover:bg-gray-600 border dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-grey-600">
                        <input type="submit" value="-" name="op"
                            class="max-w-sm bg-white hover:bg-gray-600 border dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-grey-600">
                        <input type="submit" value="+" name="op"
                            class="max-w-sm bg-white hover:bg-gray-600 border dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-grey-600">
                    </div>
                    <input type="submit" value="4" name="num"
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">
                    <input type="submit" value="5" name="num"
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">
                    <input type="submit" value="6" name="num"
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">
                    <input type="submit" value="1" name="num"
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">
                    <input type="submit" value="2" name="num"
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">
                    <input type="submit" value="3" name="num"
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">
                    <input type="submit" value="." name="num"
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">
                    <input type="submit" value="0" name="num"
                        class="max-w-sm p-3 bg-white hover:bg-gray-700 border dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-grey-700">
                    <input type="submit" value="=" name="equal"
                        class="max-w-sm p-3 bg-white hover:bg-green-700 border dark:border-green-700 dark:bg-green-800 dark:hover:bg-green-700">
                </div>
            </div>
        </div>
</body>

</html>
</form>
