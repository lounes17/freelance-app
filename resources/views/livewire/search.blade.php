<form x-data="{ open: true }">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative" >
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input 
        @click.outside="open=false"
        @click="open=true"
        type="search" id="default-search" class="block w-56  p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rechercher ... "  wire:model="query" 
        wire:keydown.arrow-down.prevent="incrementIndex"
        wire:keydown.arrow-up.prevent="decrementIndex"
        wire:keydown.enter.prevent="showJob"

         required>
    </div>
    <div class="absolute rounded bg-gray-50 w-56 text-md pt-0 " x-show="open">
        @if (strlen($query)>3)
        @if (count($jobs)>0)
        @foreach ($jobs as $index=> $job)
        <p class="p-1 {{$index == $selectedIndex ? "text-blue-500" :" text-gray-500"}}">{{$job->title}}</p>     
        @endforeach
            
        @else
        <span class="p-1 text-red-500"> 0 resultat "{{$query}}"</span>
            
        @endif
            
        @endif

    </div>
</form>