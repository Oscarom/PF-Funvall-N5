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

    <div class="h-screen rounded-md w-2/3 flex flex-col gap-20 p-1">
       
        <div class="tituloshop">Shopping history</div>

        @foreach ($listnames as $listname)
            <a href="{{ route('lists.show', $listname->id) }}" class="flex gap-40 listas">
                <div class="listname">{{ $listname->name }}</div>
                
                <div class="date flex gap-3">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/>
                      </svg>
                    {{$listname->date}}
                </div>
            </a>
            </tr>
        @endforeach
    </div>

    @livewireScripts

    <aside id="logo-sidebar"
        class="fixed top-0 right-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 sided"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800 caja">
            <div class="rectangulo flex">
                <div class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="81" height="135" viewBox="0 0 81 135"
                        fill="none">
                        <path
                            d="M31.5096 5.27646L16.643 9.25995C16.1203 9.40002 15.6746 9.74201 15.404 10.2107C15.1334 10.6794 15.0601 11.2364 15.2001 11.7591L16.9486 18.2845C17.0887 18.8072 17.4307 19.2529 17.8993 19.5235C18.368 19.7941 18.925 19.8674 19.4477 19.7274L21.9114 19.0673L24.5312 28.8445L34.4706 26.1813L31.8507 16.404L34.3144 15.7439C34.8371 15.6038 35.2828 15.2618 35.5534 14.7931C35.824 14.3245 35.8973 13.7675 35.7572 13.2447L34.0088 6.71934C33.8687 6.1966 33.5267 5.7509 33.058 5.48031C32.5893 5.20971 32.0324 5.13639 31.5096 5.27646Z"
                            fill="#F9A109" />
                        <path
                            d="M62.4022 61.0071C49.7276 50.124 40.8227 35.5085 36.9632 19.2546C36.8717 18.8802 36.6535 18.549 36.3456 18.3172C36.0377 18.0854 35.659 17.9674 35.2739 17.9831L34.5184 15.1635L18.8173 19.3706L19.5623 22.151L19.346 22.209C19.1246 22.2686 18.9179 22.3732 18.7388 22.5163C18.5596 22.6594 18.4119 22.8379 18.3049 23.0406C18.1978 23.2433 18.1337 23.466 18.1165 23.6946C18.0994 23.9232 18.1295 24.1529 18.2051 24.3693C24.0622 41.2808 24.0287 57.863 18.1043 74.1161C17.7631 75.0504 17.7341 76.0701 18.0217 77.0221L33.9685 129.669C34.3271 130.842 35.1251 131.832 36.196 132.431C37.2668 133.03 38.5276 133.193 39.7154 132.885L75.2289 123.369C76.4251 123.038 77.4447 122.253 78.0706 121.181C78.6965 120.11 78.8792 118.836 78.5798 117.631L65.4253 65.8918C64.9378 63.994 63.8832 62.29 62.4022 61.0071Z"
                            fill="#3F3D56" />
                        <path opacity="0.2"
                            d="M28.9801 8.23311C29.2823 9.36092 29.1241 10.5626 28.5403 11.5737C27.9565 12.5849 26.995 13.3227 25.8672 13.6249C24.7394 13.9271 23.5377 13.7689 22.5265 13.1851C21.5154 12.6013 20.7775 11.6398 20.4753 10.512"
                            fill="black" />
                        <path
                            d="M61.5071 80.1538L57.2066 81.3061C56.0822 78.752 54.0809 76.6846 51.5646 75.478C49.0482 74.2713 46.1832 74.005 43.4876 74.7273C40.792 75.4496 38.4439 77.1127 36.8681 79.4159C35.2922 81.719 34.5927 84.5101 34.896 87.2843L30.5953 88.4366C30.1377 88.5592 29.712 88.7793 29.3475 89.0818C28.9829 89.3843 28.6881 89.7621 28.4832 90.1892C28.2784 90.6164 28.1683 91.0827 28.1605 91.5564C28.1527 92.03 28.2474 92.4997 28.4382 92.9333L41.2451 122.045L68.0679 114.857L65.6335 83.0765C65.5966 82.5952 65.4541 82.1278 65.2161 81.7078C64.9781 81.2878 64.6505 80.9253 64.2565 80.6463C63.8626 80.3672 63.412 80.1785 62.9367 80.0934C62.4615 80.0082 61.9734 80.0289 61.5071 80.1538Z"
                            fill="#F9A109" />
                    </svg>

                </div>
                <div class="texto">
                    <div>
                        Didn’t find what you need?
                    </div>
                    <div>
                        <a href="{{ route('items.create') }}"
                            class="p-2 bg-sky-700 rounded-sm text-white cursor-pointer">Agregar Item</a>
                    </div>
                </div>
            </div>

            <h1>List</h1>

        </div>

    </aside>

</body>

</html>