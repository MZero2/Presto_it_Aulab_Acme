<x-layout>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-md-3 pt-5 shadow bg-light rounded custom-height-profile">
                
                    <h3 class="text-center mt-5">{{__('ui.helloProf')}}, <span class="colorRed">{{Auth::user()->name}}</span>.</h3>
                    
                    <div class="row">
                    <ul class="py-4 text-center ">
                        <li class="py-4">{{__('ui.userFrom')}} : {{Auth::user()->created_at}}</li>
                        <li class="py-4">Email : {{Auth::user()->email}}</li>
                        @if (Auth::user()->is_revisor)
                        <li class="py-4">
                            {{__('ui.accountStatus')}} : <span class="colorRed">{{__('ui.revisor')}}</span>
                        </li>
                        @elseif (Auth::user() != 'is_revisor' )
                        <li class="py-4">
                            {{__('ui.accountStatus')}} : <span class="text-success">{{__('ui.user')}}</span>
                        </li>
                        @endif
                        <li class="py-4">
                            <form action="{{route('logout')}}" method="post" class="nav-link ">
                                @csrf
                                <button class="justify-content-center text-center align-self-center logout-custom" type="submit"><i class="fa-solid fa-sign-out fa-xl"></i></button>
                            </form></li>
                    </ul>
                    {{-- @if (Auth::user()->is_revisor)
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="accepted-tab" data-bs-toggle="tab" data-bs-target="#accepted" type="button" role="tab" aria-controls="accepted" aria-selected="true">{{ __('Accepted Items') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rejected-tab" data-bs-toggle="tab" data-bs-target="#rejected" type="button" role="tab" aria-controls="rejected" aria-selected="false">{{ __('Rejected Items') }}</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="accepted" role="tabpanel" aria-labelledby="accepted-tab">
                            @if ($accepted_items->isNotEmpty())
                                <h2>{{ __('Accepted Items') }}</h2>
                                <table class="table">
                                    <!-- Table header -->
                                    <thead>
                                        <tr>
                                            <th scope="col">{{ __('ui.articleNameRev') }}</th>
                                            <!-- Add other table columns here -->
                                        </tr>
                                    </thead>
                                    <!-- Table body -->
                                    <tbody>
                                        @foreach ($accepted_items as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <!-- Add other table columns here -->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>{{ __('ui.noAcceptedItems') }}</p>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="rejected-tab">
                            @if ($rejected_items->isNotEmpty())
                                <h2>{{ __('Rejected Items') }}</h2>
                                <table class="table">
                                    <!-- Table header -->
                                    <thead>
                                        <tr>
                                            <th scope="col">{{ __('ui.articleNameRev') }}</th>
                                            <!-- Add other table columns here -->
                                        </tr>
                                    </thead>
                                    <!-- Table body -->
                                    <tbody>
                                        @foreach ($rejected_items as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <!-- Add other table columns here -->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>{{ __('ui.noRejectedItems') }}</p>
                            @endif
                        </div>
                    </div>
                @endif --}}
                </div>
                
            </div>
            <div class="col-12 col-md-9 px-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center mt-5">{{__('ui.yourAnnouncements')}}</h1>
                            <div class="container mt-5">
                                <div class="row justify-content-center">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped table-revision">
                                            <thead>
                                                <tr class="fw-light">
                                                    {{-- <th scope="col">#</th> --}}
                                                    <th scope="col"></th>
                                                    <th scope="col">{{__('ui.articleTab')}}</th>
                                                    <th scope="col">{{__('ui.categoryTab')}}</th>
                                                    <th scope="col">{{__('ui.priceTab')}}</th>
                                                    <th scope="col">{{__('ui.onlineFromTab')}} </th>
                                                    <th scope="col">{{__('ui.announcementStatus')}}</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (Auth::user()->items as $item)
                                                <tr>
                                                    <form action="{{route('item.delete', $item)}}" method="post">
                                                    {{-- <td scope="row">{{$item->id}}</th> --}}
                                                    <td>
                                                        @method('DELETE')
                                                            @csrf
                                                            
                                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                        </td>
                                                    </form>
                                                    <td><a href="{{route ('item.show',$item)}}">{{$item->name}}</a></td>
                                                    <td><a href="{{route ('categoryShow',$item->category)}}">{{$item->category->name}}</a></td>
                                                    <td>{{$item->price}}€</td>
                                                    <td>{{$item->created_at}}</td>
                                                    @if ($item->is_accepted == null)
                                                    <td><p>In attesa di approvazione</p></td>
                                                    
                                                    @else
                                                    <td><p>Annuncio Online</p></td>
                                                    
                                                    @endif
                                                    
                                                    
                                                    {{-- <td> --}}
                                                        {{-- <a href="{{route('item.edit', $item)}}" class="btn btn-sm btn-warning">Modifica </a> --}}
                                                        {{-- <form action="{{route('item.delete', $item)}}" method="post">
                                                        </td> --}}
                                                        {{-- <td>
                                                            {{-- @method('DELETE') --}}
                                                            
                                                            
                                                            {{-- <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
                                                        </td> --}}
                                                        
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @if(Auth::user()->is_revisor)
                                <div class="container-fluid ps-0">
                                    <div class="row">
                                        <div class="col-12 text-center mt-5">
                                            <h2 class="text-success mb-5">{{__('ui.workZone')}}</h2>
                                            <h2 class="mb-4">{{__('ui.anntoReview')}}</h2>
                                            
                                                {{-- <div class="row justify-content-center">
                                                    <div class="col-8 col-md-8">
                                                        <a href="{{ route('revisor.index', ['item' => $item]) }}"><button class="btn-uzerz btn-one-user rounded">{{__('ui.tobeReviewedDetails')}}</button></a>
                                                    </div>
                                                    
                                                </div> --}}
                                                
                                            
                                        </div>
                                    </div>
                                </div>
                                    {{-- @dd($item_to_check) --}}
                                    <div class="container-fluid ps-0">
                                        <div class="row">
                                            <div class="col-12 table-responsive">
                                                <table class="table table-striped table-revision">
                                                    <thead>
                                                        <tr>
                                                            {{-- <th scope="col">#</th> --}}
                                                            <th scope="col">{{__('ui.articleTab')}}</th>
                                                            <th scope="col">{{__('ui.categoryTab')}}</th>
                                                            <th scope="col">{{__('ui.priceTab')}}</th>
                                                            <th scope="col">{{__('ui.fromTab')}} </th>
                                                            <th scope="col">{{__('ui.dateTab')}} </th>
                                                            <th scope="col">{{__('ui.fastAcceptTab')}} </th>
                                                            <th scope="col">{{__('ui.fastRejectTab')}}</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        
                                                        
                                                        @forelse ($item_to_check as $item)
                                                <tr>
                                                    {{-- <th scope="row">{{$item->id}}</th> --}}
                                                    <td scope="row">{{$item->name}}</td>
                                                    <td>{{$item->category->name}}</td>
                                                    <td>{{$item->price}}€</td>
                                                    <td>{{$item->created_at}}</td>
                                                    <td>{{$item->user->name}}</td>
                                                    <td>
                                                        <form action="{{ route('profile.accept_item', ['item' => $item]) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button class="btn btn-success shadow">{{__('ui.acceptTab')}}</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('profile.reject_item', ['item' => $item]) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button class="btn btn-danger shadow">{{__('ui.rejectTab')}}</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="12">{{__('ui.nothingtoRevTab')}}</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    
                                    </div>
                                </div>
                            </div>
                        
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        
    


    

    
    
    
</div>
</div>
            
        </x-layout>