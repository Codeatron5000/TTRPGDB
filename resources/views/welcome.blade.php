<x-layout>
    <body class="antialiased">
        <div class="flex h-screen justify-center mt-48">
            <div class="w-full max-w-xl">
                <form action="/search" method="GET" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                    <div class="uppercase w-full text-center text-6xl mb-4 font-black italic text-teal-400">
                        {{ config('app.name') }}
                    </div>
                </form>
            </div>
        </div>
    </body>
</x-layout>
