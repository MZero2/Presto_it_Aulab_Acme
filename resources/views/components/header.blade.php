@if(session('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('access.denied'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('access.denied')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<header class="header-intro row">
    <div class="m-intro d-flex align-items-center justify-content-center">
        <div class="e-text d-flex flex-column justify-content-center align-items-center">
            <span class="fw-semibold fs-3 fs-md-5">{{__('ui.welcometo')}}</span>
            <img class="img-fluid mt-4" width="50%" src="/storage/img/Presto-Logo.png" alt="">
            <div class="row d-flex w-100 justify-content-center my-3">
                <div class="col-12 col-md-5">
                    <div class="box-1 my-2">
                        <div class="btn-header btn-one rounded">
                            <a class="link-header" href="{{route('item.index')}}">{{__('ui.explore')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="box-1 my-2">
                        <div class="btn-header btn-one rounded">
                            <a class="link-header" href="{{route('item.create')}}">{{__('ui.publish')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particleCanvas-Orange" class="e-particles-orange"></div>
        <div id="particleCanvas-Blue" class="e-particles-blue"></div>
    </div>
</header>

<x-navbar/>




<div class="container" id="mySection">
    <div class="row justify-content-around cst-contatori my-5 py-3">
        <div class="col-md-3 d-flex justify-content-around text-center flex-column align-items-center divisor-counter-1 py-3 pe-3 shadow-custom mx-3 mx-md-0 ">
            <i class="fa-regular fa-calendar fs-1 fa-xl my-4" style="color: #8a0020;"></i>
            <div class="d-flex flex-column fs-2">
                <h4>{{__('ui.fromcounter')}}</h5> 
                <span id="counter1"></span>
            </div> 
        </div>
        <div class="col-md-3 d-flex justify-content-around text-center flex-column align-items-center divisor-counter-1 py-3 pe-3 shadow-custom mx-3 mx-md-0">
            <i class="fa-regular fa-eye my-4 fs-1" style="color: #8a0020;"></i>
            <div class="d-flex flex-column fs-2">
                <h4>{{__('ui.visits')}}</h5>
                <span id="counter2"></span>
            </div> 
        </div>
        <div class="col-md-3 d-flex justify-content-around text-center flex-column align-items-center divisor-counter-1 py-3 pe-3 shadow-custom mx-3 mx-md-0">
            <i class="fa-solid fa-cart-shopping my-4 fs-1" style="color: #8a0020;"></i>
            <div class="d-flex flex-column fs-2">    
                <h4>{{__('ui.customers')}}</h5> 
                <span id="counter3"></span>
            </div>
        </div>
    </div>
    
</div>



    
    
    {{-- <div class="container w-75 my-3">
        <header class="container header-custom rounded d-flex flex-column justify-content-center py-3">
            <section class="d-flex justify-content-center align-items-center my-3">
                <article class="row w-100 align-items-center justify-content-center">
                    <section class="col-12 col-md-6 h-75 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-center align-items-center h-50 text-center" data-aos="fade-right" data-aos-duration="2000" data-aos-easing="ease-in-sine">
                            <h1>{{__('ui.welcometo')}}</h1>
                        </div> 
                    </section>
                    <section class="col-12 col-md-6 h-100 d-flex justify-content-center">
                        <div class="d-flex justify-content-center align-items-center" data-aos="fade-left" data-aos-duration="2000" data-aos-easing="ease-in-sine">
                            <img class="img-fluid" width="50%" src="/storage/img/Presto-Logo.png" alt="">
                        </div>
                    </section>
                </article>
            </section>
            <section class="d-flex justify-content-center align-items-center h-25">
                <article>
                    <button class="button-82-pushable" role="button">
                        <span class="button-82-shadow"></span>
                        <span class="button-82-edge"></span>
                        <span class="button-82-front text">
                            <a class="link-custom" href="{{route('item.index')}}">{{__('ui.explore')}}</a>
                            
                        </span>
                    </button>
                    <button class="button-82-pushable" role="button">
                        <span class="button-82-shadow"></span>
                        <span class="button-82-edge"></span>
                        <span class="button-82-front text">
                            <a class="link-custom" href="{{route('item.create')}}">{{__('ui.publish')}}</a>
                            
                        </span>
                        
                    </article>
                </section>
            </header>
            
            <div class="container">
                <div class="row my-2">
                    <div class="row col-md-6 d-flex justify-content-around">
                        <div class="col-12 my-2 d-flex flex-column align-items-center categories-custom rounded justify-content-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <a href="{{ route('categoryShow', ['category' => 1]) }}"><i class="fa-solid fa-car fa-xl" style="color: #000000;"></i></a>
                            <h3>{{__('ui.motors')}}</h3>
                        </div>
                        
                        <div class="col-12 my-2 d-flex flex-column align-items-center categories-custom rounded justify-content-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <a href="{{ route('categoryShow', ['category' => 2]) }}"><i class="fa-sharp fa-solid fa-xl fa-shirt" style="color: #000000;"></i></a>
                            <h3>{{__('ui.clothing')}}</h3>
                        </div>
                    </div>
                    
                    <div class=" row col-md-6 d-flex justify-content-around">
                        <div class="col-12 my-2 d-flex flex-column align-items-center categories-custom rounded justify-content-center" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <a href="{{ route('categoryShow', ['category' => 3]) }}"><i class="fa-solid fa-couch" style="color: #000000;"></i></a>
                            <h3>{{__('ui.homeDecor')}}</h3>
                        </div>
                        
                        <div class="col-12 my-2 d-flex flex-column align-items-center categories-custom rounded justify-content-center" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <a href="{{ route('categoryShow', ['category' => 4]) }}"><i class="fa-solid fa-xl fa-laptop" style="color: #000000;"></i></a>
                            <h3>{{__('ui.technology')}}</h3>
                        </div>
                    </div>
                </div>
                
                <div class="row my-2">
                    <div class="row col-md-6 d-flex justify-content-around">
                        <div class="col-12 my-2 d-flex flex-column align-items-center categories-custom rounded justify-content-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <a href="{{ route('categoryShow', ['category' => 5]) }}"><i class="fa-solid fa-xl fa-music" style="color: #000000;"></i></a>
                            <h3>{{__('ui.music')}}</h3>
                        </div>
                        
                        <div class="col-12 my-2 d-flex flex-column align-items-center categories-custom rounded justify-content-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <a href="{{ route('categoryShow', ['category' => 6]) }}"><i class="fa-solid fa-xl fa-toolbox" style="color: #000000;"></i></a>
                            <h3>{{__('ui.equipment')}}</h3>
                        </div>
                    </div>
                    
                    <div class="row col-md-6 d-flex justify-content-around">
                        <div class="col-12 my-2 d-flex flex-column align-items-center categories-custom rounded justify-content-center" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <a href="{{ route('categoryShow', ['category' => 7]) }}"><i class="fa-solid fa-futbol fa-xl" style="color: #000000;"></i></a>
                            <h3>{{__('ui.sport')}}</h3>
                        </div>
                        
                        <div class="col-12 my-2 d-flex flex-column align-items-center categories-custom rounded justify-content-center" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <a href="{{ route('categoryShow', ['category' => 8]) }}"><i class="fa-solid fa-clapperboard fa-xl" style="color: #000000;"></i></a>
                            <h3>{{__('ui.movies')}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}