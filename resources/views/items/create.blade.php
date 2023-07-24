<x-layout>

    <x-navbar/>
    <h4 class="display-5 mt-5 p-5 box shadow text-center">{{__('ui.sellItemNav')}}</h4>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
            <livewire:create-item />
        </div>
        </div>
    </div>


</x-layout>