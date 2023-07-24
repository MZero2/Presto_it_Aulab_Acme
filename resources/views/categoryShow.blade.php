<x-layout>
    <div class="container-fluid shadow pt-3 mt-5">
        <div class="row">
            <div class="col-12">
                <h4 class="text-center  fs-2 p-3">{{__('ui.exploreCategory')}} : {{$category->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container custom-margin-top"> 
        <div class="row justify-content-evenly">
            <div class="d-flex justify-content-center">
                {{-- <a href="{{route('item.create')}}" class=" btn-uzerz btn-one-user rounded fs-5 w-25">{{__('ui.newAnnCat')}}</a> --}}
            </div>
            @forelse($items as $item)
            <x-card
        :item="$item"
        />
            @empty
            <div class="col-12 d-flex justify-content-center flex-column text-center">
                <p class=" fs-2">{{__('ui.noItemsCategory')}}</p>

                <p class=" fs-1">{{__('ui.publishinCategory')}} : <span class="text-danger">{{$category->name}}</span></p>
                <div class="justify-content-center">
                    <button class=" btn-uzerz btn-one rounded px-3"><a href="{{route('item.create')}}" class="link-header">{{__('ui.newAnnCat')}}</a>
                    </button>
                </div>
                
            </div>
            @endforelse
        </div>
    </div>
</x-layout>