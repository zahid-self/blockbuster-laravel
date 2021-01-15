<div class="relative mt-3 md:mt-0" x-data="{ isOpen = false }">
    <input 
        wire:model.debounce.500ms="search" 
        type="text" 
        class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" 
        placeholder="Search"
        @focus = "isOpen = true"
        @keydwon ="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown.shift.tab = "isOpen = false"
    >
    <div wire:loading class="spinner top-2 right-0 mr-4"></div>
    @if (strlen($search) >= 2)
        <div 
            class="z-50 absolute bg-gray-800 text-lg rounded w-64 mt-2"
            x.show.transition.opacity="isOpen"
            @keydown.escape.window="isOpen = false"
        >
            @if ($searchResult->count() > 0)
                <ul>
                    @foreach ($searchResult as $result)
                    <li class="border-b border-gray-700">
                        <a href="{{ route('movies.show', $result['id']) }}" class="block text-white hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"> 
                            @if ($result['poster_path'])
                                <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">   
                            @endif
                            <span class="ml-4">{{ $result['title'] }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No result for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>
