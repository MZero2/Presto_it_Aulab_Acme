<x-layout>
    
    @if ($item_to_check)
    <div class="container-fluid pt-5 pb-3 shadow mb-1 mt-5">
        <div class="row text-center">
                <h1 class="fs-3">
                    {{__('ui.tobeReviewed')}}
                </h1>
        </div>
    </div>
    
    <div class="container my-5 pb-5">
        <div class="row justify-content-between mt-3 h-75 border border-4 mx-auto">
            <div class="col-12 col-md-5 px-0">
                <div id="carouselExampleFade" class="carousel slide carousel-scroll m-4 ">
                    <div class="carousel-inner rounded">
                        @if ($item_to_check->images->isEmpty())
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
                            @foreach($item_to_check->images as $image)
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
            </div>
            <div class="col-md-3  text-center d-flex flex-column">
                <br>
                <br>
                <br>
                <h5 class="">Tags</h5>
                <div class="p-2">
                    @if (!empty($image) && $image->labels)
                        @foreach ($image->labels as $label)
                            <p class="d-inline">{{$label}},</p>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-md-3 border-start text-center d-flex justify-content-center">
                <div class="card-body">
                    <br>
                    <br>
                    <br>
                    @if (!empty($image))
                    <h5 class="tc-accent">{{__('ui.reviewimages')}}</h5>
                    <p>{{__('ui.adultcontent')}}: <span class="{{$image->adult}}"></span></p>
                    <p>{{__('ui.spoof')}}: <span class="{{$image->spoof}}"></span></p>
                    <p>{{__('ui.medicine')}}: <span class="{{$image->medical}}"></span></p>
                    <p>{{__('ui.violence')}}: <span class="{{$image->violence}}"></span></p>
                    <p>{{__('ui.racy')}}: <span class="{{$image->racy}}"></span></p>
                    @endif
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-md-5 text-center mt-3 d-flex flex-column justify-content-center card border-0">
                <h4 class="card-title my-3">{{__('ui.articleNameRev')}}: {{ $item_to_check->name }}</h4>
                <p class="card-text fs-5">{{__('ui.descriptionRev')}}: {{ $item_to_check->description }}</p>
                <p class="card-text my-3 fs-5">{{__('ui.priceShow')}} : {{$item_to_check->price}} €</p>
            </div>
            <div class="col-12 col-md-3 mt-3 d-flex flex-column justify-content-center align-items-center p-3">
                <a href="{{route('categoryShow',['category'=>$item_to_check->category])}}" class="border-top border-light mb-5 card-link shadow btn-uzerz btn-one rounded px-3">{{__('ui.categoryShow')}} : {{$item_to_check->category->name}}</a>
                <p class="card-footer mt-3 fs-5">{{__('ui.publishedonRev')}} {{ $item_to_check->created_at->format('d/m/Y') }}</p>
                <p class="card-text fs-5">{{__('ui.publishedfromRev')}}: {{ $item_to_check->user->name }}</p>
            </div>
            <div class="col-12 col-md-3 mt-3 d-flex flex-column align-items-center justify-content-around">
                <div class="d-flex col-md-12 h-100 align-items-center flex-column justify-content-around">
                    <form class="d-flex justify-content-center" action="{{ route('revisor.accept_item', ['item' => $item_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success shadow rounded-circle"><i class="fa-solid fa-check" style="color: #ffffff;"></i></button>
                    </form>
                    <form class="d-flex justify-content-center" action="{{ route('revisor.reject_item', ['item' => $item_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger shadow rounded-circle"><i class="fa-solid fa-x" style="color: #ffffff;"></i></button>
                    </form>
                    @if ($last_accepted_or_rejected_item)
                        <form class="d-flex justify-content-center" action="{{ route('revisor.undoAction') }}" method="POST">
                            @csrf
                            <button class="btn btn-warning shadow rounded-circle"><i class="fa-solid fa-rotate-left" style="color: #ffffff;"></i></button>
                        </form>
                    @endif
                </div>
            </div>
        </div>

        
        @else
        <div class="container-fluid pt-5 bg-gradient shadow mb-1 pb-5 mt-5">
            <div class="row justify-content-center text-center">
                <div class="col-12 p-1">
                    <h1 class="display-5">
                        {{__('ui.noItemsRevPage')}}
                    </h1>
                    <h3>{{__('ui.tryLaterRevPage')}}</h3>
                    @if ($last_accepted_or_rejected_item)
                        <form action="{{ route('revisor.undoAction') }}" method="POST">
                            @csrf
                            <button class="btn btn-warning my-5 shadow">{{__('ui.revertRevisionbtn')}}</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    @endif
</x-layout>