<x-layout>
    <div class="container-fluid p-4 shadow mb-3 mt-5">
        <div class="row justify-content-between">
            <div class="col-12 p-2 mt-3">
                <h2 class="display-5 text-center">{{__('ui.announcementShow')}}: {{$item->name}}</h1>
                </div>
            </div>
    </div>
    
    <div class="container my-5 px-3 pt-0 shadow-custom">
            <div class="row mt-3 justify-content-evenly align-items-center">
                <div class="col-12 col-md-7 pb-3">
                    <div id="carouselExampleFade" class="carousel slide carousel-scroll">
                        <div class="carousel-inner rounded ">
                            
                            @if ($item->images->isEmpty())
                            
                            <div class="carousel-item active">
                                <img src="{{asset('/storage/img/placeholderPresto.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/storage/img/placeholderPresto.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/storage/img/placeholderPresto.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            @else
                            
                            @foreach($item->images as $image)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <img src="{{ $image->getUrl(300, 200) }}" class="d-block w-100" alt="...">
                            </div>
                            @endforeach
                            @endif
                        </div>
                        
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <i class="fa-solid fa-xl fa-arrow-left" style="color: red"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <i class="fa-solid fa-xl fa-arrow-right" style="color: red"></i>
                </button>
            </div>
        </div> <!-- /container -->
            <div class="col-12 col-md-5 border-start shadow my-5 card">
            <h3 class="card-title mb-3 ms-2 my-2">{{$item->name}}</h3>
            <p class="card-text my-4">{{__('ui.descriptionRev')}}: {{$item->description}}</p>
            <p class="card-text my-5">{{__('ui.priceShow')}} : {{$item->price}} €</p>
            <div class="d-flex justify-content-center">
            <a href="{{route('categoryShow',['category'=>$item->category])}}" class="my-2 mb-4 card-link shadow btn-uzerz btn-one rounded px-3">{{__('ui.categoryShow')}} : {{$item->category->name}}</a>
            </div>
            <p class="card-footer">{{__('ui.publishedonRev')}} {{$item->created_at->format('d/m/Y')}} - {{__('ui.from')}} <span class="fw-bold">{{$item->user->name ??''}}</span> </p>
            </div>
        </div>
    </div>


</x-layout>