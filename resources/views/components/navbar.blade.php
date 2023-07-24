<nav class="navbar navbar-expand-lg header5 container-fluid nav-sticky" id="navbar_top">
  <a class="ms-2 col-md-1 col-2 d-flex justify-content-center" href="/">
    <img class="img-fluid" src="/storage/img/arrow.png" width="50" height="60" alt="">
  </a>
  <div class="collapse navbar-collapse  col-md-6 col-12 w-50 menu5 " id="navbarSupportedContent">
    <ul class="navbar-nav mx-0 row d-flex justify-content-evenly  w-100">
      <li class="nav-item col-md-2 w-sm-100">
        <a class="nav-link text-center" aria-current="page" href="/">Home</a>
      </li>
      <li class="nav-item dropdown col-md-2 text-center">
        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{__('ui.categories')}}
        </a>
        <ul class="dropdown-menu menu-custom"  aria-labelledby="categoriesDropdown">
          @foreach ($categories as $category)
            <li class="text-center">
              <a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">{{($category->name)}}</a>
            </li>
            <li><hr class="dropdown-divider"></li>
          @endforeach
        </ul>
      </li>
      @auth
      @if(Auth::user() != null)
        <li class="nav-item  col-md-3 text-center">
          <a class="nav-link" aria-current="page" href="{{route('item.create')}}">{{__('ui.sellItemNav')}}</a>
        
              
            
          </li>
            @if(Auth::user()->is_revisor)
            <li class="nav-item col-12 col-md-3 text-center ">
                <a class="nav-link" aria-current="page" href="{{route('revisor.index')}}">{{__('ui.reviewerArea')}}
                <span class="" >({{App\Models\Item::toBeRevisionedCount()}}) <span class="visually-hidden">unread messages</span></span>
                </a>
            </li>        
            @endif 
            @endauth 
          </ul>
                
      @endif
      <li class="nav-item col-md-2 text-center my-2 my-md-0 ">
        <a class="nav-link" aria-current="page" href="{{route('item.index')}}">{{__('ui.advertisements')}}</a>
      </li>
      <li class="nav-item dropdown col-md-1 text-center ">
        <a class="nav-link dropdown-toggle " href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-earth-europe fa-xl" style="color: #ffffff;"></i>
        </a>
        <ul class="dropdown-menu menu-custom my-2 my-md-0"  aria-labelledby="categoriesDropdown">
          <li class="nav-item text-center">
            <x-_locale lang='it' />
          </li>
          <li class="nav-item text-center">
            <x-_locale lang='en' />
          </li>
          <li class="nav-item text-center">
            <x-_locale lang='es' />
          </li>
        </ul>
      </li>
      @if(Auth::user() != null)
          <ul class="col-md-1 col-12 d-flex justify-content-center align-items-center mb-0 ps-0">    
            <li class="nav-item col-6 text-center py-1">
              <a class="" href="{{ route('user.profile') }}"><i class="fa-solid fs-4 fa-user fa-xl" style="color: white;"></i></a>
            </li>  
            <li class="nav-item col-6 text-center">
              <form action="{{route('logout')}}" method="post" class="">
                @csrf
                <button class="logout-custom" type="submit"><i class="fa-solid fa-sign-out fa-xl" style="color: white;"></i></button>
              </form>
            </li>
          </ul>
        @else
            <ul class="col-12 col-md-3 text-center d-flex justify-content-center">
              <li class="nav-item col-5 text-center">
                <a class="nav-link" aria-current="page" href="{{route('register')}}">{{__('ui.signUp')}}</a>
              </li>
              <li class="nav-item col-5 text-center">
                <a class="nav-link" aria-current="page" href="{{route('login')}}">{{__('ui.login')}}</a>
              </li>
            </ul>
  @endif
    </ul>
  </div>
  <div class="col-5 col-md-3 d-flex justify-content-around">
    <form action="{{route('item.search')}}" class="searchBox mt-2" role="search">
      <input class="searchInput" name="searched" type="search" placeholder="{{__('ui.searchbox')}}" aria-label="Search">
      <button class="searchButton" type="submit" role="button">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
    </form>
  </div>
  
  <button class="navbar-toggler me-2 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>
{{-- <ul class="menu5">
  <li>Home</li>
  <li>About</li>
  <li>Blog</li>
  <li>Projects</li>
  <li>Contact</li>
</ul> --}}
</nav>


@if(session('message'))
  <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
      {{session('message')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if(session('access.denied'))
  <div class="alert alert-danger alert-dismissible fade show " role="alert">
      {{session('access.denied')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif