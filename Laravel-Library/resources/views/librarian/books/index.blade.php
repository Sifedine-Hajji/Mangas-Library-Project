<x-librarian-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Adding Books') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form id="form" method="POST" action="{{route('books.store')}}" class="bg-gray-700 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                    @method('POST') 
                <div><img src="https://s2.qwant.com/thumbr/0x380/4/b/83f0062198eb4d586ef7aa430a246ada77e0f6f964e78d1f5563c3a96605f1/latest.jpg?u=https%3A%2F%2Fvignette.wikia.nocookie.net%2Four-hero-academia-fanon%2Fimages%2F9%2F94%2FChibi_All_Might.png%2Frevision%2Flatest%3Fcb%3D20180610072210%26path-prefix%3Des&q=0&b=1&p=0&a=1" width="10%"></div>
                <br>
                <h1 class="block text-white font-bold mb-2 text-xl text-center">ADD MANGAS TO YOUR LIBRARY</h1>
                <br>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="name">
                        Title
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="title" id="name" type="text" placeholder="Enter the title" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="name">
                        Author
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="author" id="name" type="text" placeholder="Enter the Author" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="name">
                        Genre
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="genre" id="name" type="text" placeholder="Shonen, Seinen, Shojo, Eichi,..." required>
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="name">
                        Volume n°
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="volume" id="name" type="text" placeholder="Tome number" required>
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="name">
                        Publisher or Editor
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="publisher" id="name" type="text" placeholder="Enter name of the publisher or editor" required>
                </div>
    
    
                
                <div class="flex items-center justify-between">
                    <button id="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        <i class="fab fa-whatsapp"></i> save
                    </button>
                </div>
    
                <div class="mb-4">
    
     
            </form>

        </div>
    </div>
</x-librarian-layout>