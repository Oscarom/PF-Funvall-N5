<div class="flex flex-col justify-center items-center items">

    <div class="titulo p-2 flex gap-10">

        <div class="titulo2">
            <span class="naranja">Shoppingify</span> allows you take your shopping list wherever you go
        </div>

        <form class="formulario">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>

                <input wire:model="search" type="text" placeholder="Search items"
                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-200 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Item" />
            </div>
        </form>

    </div>

    <div class="h-screen rounded-md w-2/3 flex flex-col gap-20 p-1">
        @foreach ($categorias as $category)
            <div>
                <h2 class="text-3xl p-5">{{ $category->name }}</h2>
                <div class="grid grid-cols-4 md:grid-cols-4 gap-7">
                    @foreach ($category->items as $item)
                        <form class="bg-gray-100 rounded-md flex gap-7" method="POST"
                            action="{{ route('items.show', $item->id) }}">
                            @csrf
                            @method('get')
                            <div>{{ $item->name }}</div>
                            <button type="submit" class="p-1 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    viewBox="0 0 25 25" fill="none">
                                    <g clip-path="url(#clip0_6_106)">
                                        <path
                                            d="M18.6333 13.0249H13.6333V18.0249C13.6333 18.5749 13.1833 19.0249 12.6333 19.0249C12.0833 19.0249 11.6333 18.5749 11.6333 18.0249V13.0249H6.6333C6.0833 13.0249 5.6333 12.5749 5.6333 12.0249C5.6333 11.4749 6.0833 11.0249 6.6333 11.0249H11.6333V6.0249C11.6333 5.4749 12.0833 5.0249 12.6333 5.0249C13.1833 5.0249 13.6333 5.4749 13.6333 6.0249V11.0249H18.6333C19.1833 11.0249 19.6333 11.4749 19.6333 12.0249C19.6333 12.5749 19.1833 13.0249 18.6333 13.0249Z"
                                            fill="#C1C1C4" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6_106">
                                            <rect width="24" height="24" fill="white"
                                                transform="translate(0.633301 0.0249023)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </button>
                        </form>
                    @endforeach
                </div>
            </div>
            </tr>
        @endforeach
    </div>
</div>
