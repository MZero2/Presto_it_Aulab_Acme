<x-layout>

    <x-header />

    <x-categorygrid />

    <div class="container my-5"> 
    <h2 class="text-center">{{__('ui.latestarticles')}}</h2>
    <div class="row d-flex justify-content-evenly">
    @foreach($items as $item)
    
    <x-card 
        :item="$item"
    />
    @endforeach
    </div>
    </div>

    

</x-layout>