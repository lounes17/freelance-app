<div class="max-w p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-7 my-5">
   <div class="flex justify-between">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-900 dark:text-white"> {{$job->title}}</h5>
    </a>

    <button class="{{ $job->isLiked() ? 'text-red-600' :'text-gray-400'}}" wire:click="addLike">    <svg class="w-6 h-6" fill="{{ $job->isLiked() ? 'rgb(220,38,38)' :'white'}}" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
    </button>
   </div>
    
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$job->description}}</p>
    <div class="inline-bloc mb-3 font-normal text-gray-400 dark:text-gray-400 my-2">{{number_format($job->price/100,2,',','')}} €</div>

    <a href="{{route('jobs.show',$job->id)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Consulter la mission
        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
   
</div>
