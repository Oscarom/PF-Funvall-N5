<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @livewireStyles
    <title>Items</title>

</head>

<body>
    <x-navigation></x-navigation>
    @livewire('show-items')

    @livewireScripts

    <aside id="logo-sidebar"
        class="fixed top-0 right-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 sided"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800 caja">

            <div>
                <a href="{{ route('items.index') }}"
                    class="p-2 bg-sky-700 rounded-sm text-white cursor-pointer">Back</a>
            </div>

            <div>
                <label for="name" class="etiquetas">Name</label>
                <img src="{{ $item->image }}" alt="">
                <div>{{ $item->name }}</div>
                <div>{{ $item->note }}</div>

                <div class="flex p-20 gap-20 botones">
                    {{-- <div>
                        <a href="{{ route('lists.create', $item->id) }}"
                            class="p-2 bg-sky-700 rounded-sm text-white cursor-pointer">Add</a>
                    </div> --}}
                    <div class="flex gap-10">

                        <form class="flex flex-col gap-3" method="POST"
                            action="{{ route('items.destroy', $item->id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-white bg-sky-800 p-1 rounded-md">Eliminar</button>
                        </form>

                        {{-- <a href="{{ route('listitems.index', $item->id) }}"
                            class="p-2 bg-sky-700 rounded-sm text-white cursor-pointer">Agregar
                        </a> --}}

                        <form class="flex flex-col gap-3" method="POST"
                            action="{{ route('listitems.store') }}">
                            @csrf

                            
                            <input type="hidden" name="id" value="{{$item->id }}">
                          
                            <input name="name" type="hidden" value="{{$item->name }}">

                            <button type="submit" class="text-white bg-sky-800 p-1 rounded-md">Agregar</button>
                        </form>



                    </div>
                </div>



            </div>

        </div>

    </aside>

</body>

