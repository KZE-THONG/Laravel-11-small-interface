<div class="bg-white/10 rounded-xl p-5 flex border-2 border-transparent hover:border-blue-900 transition duration-700 group hover:cursor-pointer ">
   {{-- picture --}}
    <div> 
        <img src="http://picsum.photos/seed/{{rand(0,10000)}}/100/100" alt="" class="rounded-lg mx-6">
    </div> 
    {{-- Middle --}}
    <div class="font-bold flex-1 flex flex-col">
        <div class="text-sm text-white/60">Mengthong</div>
        <h3 class="text-xl flex-1 mt-2 group-hover:text-blue-900  transition duration-500  ">Full Stack Laravel Stack Developer</h3>
        <p class="text-white/60 my-auto">Full Time - From $60,000</p>
    </div>

    <div class="flex flex-col">

        <div class="flex-1 self-end" >
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>
        <div>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>

        </div>

    </div>
</div>
