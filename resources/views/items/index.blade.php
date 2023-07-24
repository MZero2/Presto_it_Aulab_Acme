<x-layout>
    
<div class="container-fluid mx-0 px-0 mt-5">
    <div class="row">   
        <div class="col-12 col-md-12">
                <h2 class="text-center display-5 mt-5 pb-4 shadow rounded">{{__('ui.allAnnouncements')}}</h2>
        </div>
    </div>
</div>

            <div class="container mt-5">
                <div class="row justify-content-evenly">
                    @foreach($items as $item)
                    <x-card
                    :item="$item"
                    />
                    @endforeach
                </div>
            </div>
    {{-- <div class="col-12 col-md-4 order-1 order-md-2 d-none d-md-inline-flex flex-column align-items-">
        <x-categorygrid />

    </div> --}}
    

<div class="container d-flex justify-content-center">
    {{$items->links()}}
</div>
</x-layout>