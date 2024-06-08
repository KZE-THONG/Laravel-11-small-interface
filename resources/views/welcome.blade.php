<x-layout>

    <div class="text-center flex flex-col space-y-3">
        <div>
            <h1 class="font-bold text-4xl">Let's Find You A Greate Job</h1>
        </div>

        <div>
            <form action="" class="mt-3" >
                <div>
                    <input type="text" placeholder="Find a job..." class="bg-white/40 px-4 py-3 rounded-2xl max-w-2xl w-full">
                </div>
            </form>
        </div>
    </div>

    <div class="space-y-10 mt-10">

        {{-- first section --}}
        <section>
            <x-section-heading>Job Feature</x-section-heading>
            <div class="flex gap-x-4">
                <x-small-card></x-small-card>
                <x-small-card></x-small-card>
                <x-small-card></x-small-card>
            </div>
        </section>

        {{-- second section --}}
        <section>
            <x-section-heading>Job Listing</x-section-heading>
            <div class="gap-1" >
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>
                <x-tag size='big'>Tag</x-tag>

            </div>



        </section>
        {{-- third section --}}
        <section>
            <x-section-heading>Job Feature</x-section-heading>
            <div class="space-y-6 gap-x-4">

                <x-big-card></x-big-card>
                <x-big-card></x-big-card>
                <x-big-card></x-big-card>
                <x-big-card></x-big-card>
                <x-big-card></x-big-card>
            </div>
        </section>

        <section>
            <x-section-heading>Hottest Jobs</x-section-heading>
            <div class="grid lg:grid-cols-2 gap-2">
                <x-wide-card></x-wide-card>
                <x-wide-card></x-wide-card>
                <x-wide-card></x-wide-card>
                <x-wide-card></x-wide-card>
                <x-wide-card></x-wide-card>
                <x-wide-card></x-wide-card>
            </div>
        </section>

        <section>
            <x-section-heading>Developer Select Job</x-section-heading>
            <div class="grid grid-cols-1 gap-y-2 " >
                <x-wide-card></x-wide-card>
                <x-wide-card></x-wide-card>
            </div>
        </section>

    </div>


</x-layout>
