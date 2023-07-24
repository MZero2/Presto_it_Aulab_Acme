<x-layout>
   
        <<div class="login-container mt-5 container-fluid">
            <section class="section-login-custom row"> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        
                    <div class="signin col-8 col-md-4">
        
                    <div class="content">
        
                        <h2>{{__('ui.register')}}</h2>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="form" method="post" action="{{route('register')}}">
                        @csrf
                        <div class="inputBox">
                            <input type="text" name="name" aria-describedby="nameHelp" required><i>Name</i>
                        </div>
                        <div class="inputBox">
        
                            <input type="email" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required> <i>Email</i>
    
                            
        
                        </div>
        
                        <div class="inputBox">
        
                            <input type="password" name="password" id="exampleInputPassword1" required> <i>Password</i>
        
                        </div>
        
                        {{-- <div class="links"> <a href="{{route('register')}}">{{__('ui.signUp')}}</a> --}}
    
                        
                        <div class="inputBox">
                                <input type="password" name="password_confirmation" id="exampleInputPasswordConfirmation" required><i>Password Confirmation</i>
                        </div>
                    
        
                        <div class="box-1 my-2">
                            <button class="btn-header btn-two rounded" type="submit" role="button">
                                {{__('ui.register')}}
                            </button>
        
                        </div>
    
                    </form>
        
                    </div>
                </div>
        
            </section> <!-- partial -->
        </div>
    {{-- <div class="container col-12 col-md-6 d-flex flex-column align-items-center justify-content-around login-card rounded">
        <div class="row py-3 align-items-center">
            <h2>Registrati</h2>
        </div>
        <div class="row w-100">
            <div class="col-12 col-md-8 w-100">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{route('register')}}">
                @csrf
                    <div class="mb-3 text-center d-flex flex-column align-items-center">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="w-75 rounded-pill" name="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 text-center d-flex flex-column align-items-center">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" name="email" class="w-75 rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="d-flex justify-content-center my-3">
                        <button class="btn-cardz btn-one rounded mt-4" type="submit" role="button">
                            <span class="button-82-shadow"></span>
                            <span class="button-82-edge"></span>
                            <span class="button-82-front text">
                            Registrati
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    


    {{-- <div class="container d-flex flex-column align-items-center justify-content-around login-card">
                <form method="post" action="{{route('register')}}">
                @csrf
                    <div class="mb-3 row justify-content-center">
                        
                    </div>
                    <div class="mb-3 row justify-content-center">
                        
                    </div>
                    <div class="mb-3 row justify-content-center">
                        
                    </div>
                        <div class="mb-3 row justify-content-center">
                            
                        </div><button class="d-flex justify-content-center"><button class="button-82-pushable mt-4" type="submit" role="button">
                            <span class="button-82-shadow"></span>
                            <span class="button-82-edge"></span>
                            <span class="button-82-front text">
                            Registrati
                            </span>
                        </button></div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
</x-layout>



