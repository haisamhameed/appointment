<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('css')
    @livewireStyles
</head>

<body>

        <!-- =========== Content =============== -->

        @yield('content')
        <div x-data="{ count: 0 }" class="flex items-center gap-x-3">
            <x-button x-hold.click.repeat.200ms="count--" icon="minus" />
         
            <span class="bg-teal-600 text-white px-5 py-1.5" x-text="count"></span>
         
            <x-button x-hold.click.repeat.200ms="count++" icon="plus" />
        </div>
        <!-- =========== End Content =============== -->

    @stack('js')
    @wireUiScripts
    @livewireScripts

</body>

</html>
