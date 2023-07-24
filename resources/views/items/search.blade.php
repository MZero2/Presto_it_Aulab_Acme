<x-layout>
    <x-navbar/>



<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-3 col-md-3 d-flex justify-content-center"> 
            <div class="mt-5 p-5 d-flex justify-content-center">
                <a href="/" class="">
                    <button class="link-header btn-searchPage btn-one rounded">{{__('ui.backtoHomebtn')}}
                    </button>
                </a>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center">
        
        @forelse($items as $item)
            
                <x-card
                :item="$item"
                />
        @empty
            <div class="col-12 justify-content-center">
                <div class="alert alert-warning py-3 shadow">
                    <p>Non ci sono annunci corrispondenti!!</p>
                </div>
            </div>
        @endforelse
        {{$items->links()}}
    </div>
</div>


</x-layout>