

{{-- <form wire:submit.prevent="store()" class="mt-5 border p-5 shadow rounded text-center"> --}}
  @if(session('message'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{session('message')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
  {{-- <div class="mb-3">
    <label for="name" class="form-label fs-5"><b>{{__('ui.nameCreate')}}</b> </label>
    <input type="text" class="form-control border border-dark" wire:model.lazy="name">
    @error('name') <span class="error text-success">{{$message}}</span> @enderror
  </div> --}}
  {{-- <div class="mb-3 d-flex justify-content-center flex-column">
    <label for="category_id" class="form-label fs-5"><b>{{__('ui.categoryCreate')}}</b></label>
    <div><select wire:model.defer="category_id" class="w-75">
      <option value="" selected>{{ __('ui.selectCategoryPlaceholder') }}</option>
      @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select></div>
      @error('category_id') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <div class="mb-3">
    <label for="price" class="form-label fs-5"><b>{{__('ui.priceCreate')}}</b></label>
    <input type="numeric" class="form-control border border-dark" wire:model="price">
    @error('price') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <div class="mb-3">
    <label for="description" class="form-label fs-5"><b>{{__('ui.descriptionCreate')}}</b></label>
    <input type="text" class="form-control border border-dark" wire:model.lazy="description" style="height: 80px">
    @error('description') <span class="error text-success">{{$message}}</span> @enderror
  </div>
  <div class="mb-3">
    <input wire:model="temporary_images" type="file" multiple class="form-control border border-dark shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
    @error('temporary_images.*')
    <p class="text-danger mt_2">{{$message}}</p>
    @enderror
  </div> --}}
  @if(!empty($images))
  {{-- <div class="container w-100"></div> --}}
    {{-- <div class="row">
      <div class="col-12">
        <p>Photo preview:</p>
        <div class="row border border-4 login-card rounded shadow py-4">
          @foreach($images as $key => $image)
          <div class="col-12 my-3">
            <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}})"></div>
            <button class="btn btn-danger shadow d-block text-center mt-2 mx-auto" type="button" wire:click="removeImage({{$key}})">{{__('ui.deletebtn')}}</button>
          </div>
          @endforeach
        </div>
      </div>
    </div> --}}
    @endif
  {{-- <button type="submit" class="btn-uzerz btn-one-user rounded w-50">{{__('ui.submitCreate')}}</button> --}}
{{-- </form> --}}




<div class="container-fluid d-flex">
  <div class="body-create mb-5 rounded-2">
    <div class="signupSection">
        <form wire:submit.prevent="store()" class="signupForm d-flex flex-column align-content-between">
          @if(session('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
            <div class="d-flex flex-md-row flex-column justify-content-between mt-4">
              <ul class="noBullet d-flex flex-column justify-content-around col-12 col-md-6">
                <li class="d-flex flex-column justify-content-center align-items-center">
                  <label for="title" class="form-label fs-5"><b>{{__('ui.nameCreate')}}</b> </label>
                  <input type="text" class="inputFields rounded-2 text-center w-75"  id="title" name="username" wire:model.lazy="name">
                  @error('name') <span class="error text-success">{{$message}}</span> @enderror
                </li>
                <li class="d-flex flex-column align-items-center">
                  <label for="price" class="form-label fs-5"><b>{{__('ui.priceCreate')}}</b></label>
                  <input type="numeric" class="inputFields rounded-2 text-center w-75" wire:model="price">
                  @error('price') <span class="error text-success">{{$message}}</span> @enderror
                </li>
                <li class="d-flex flex-column align-items-center">
                  <label for="description" class="form-label fs-5"><b>{{__('ui.descriptionCreate')}}</b></label>
                  <input type="text" class="inputFields rounded-2 text-center w-75" wire:model.lazy="description" style="height: 80px">
                  @error('description') <span class="error text-success">{{$message}}</span> @enderror
                </li>
              </ul>
              <div class="d-flex flex-column align-items-center col-12 col-md-6 rounded-2">
                <div class="d-flex flex-column align-items-center">
                  <label for="category_id" class="form-label fs-5"><b>{{__('ui.categoryCreate')}}</b></label>
                  <div>
                    <select wire:model.defer="category_id" class="inputFields rounded-2 w-100">
                      <option value="" selected>{{ __('ui.selectCategoryPlaceholder') }}</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                    @error('category_id') <span class="error text-success">{{$message}}</span> @enderror
                </div>
                <div class="info rounded-2">
                  <label for="temporary_images" class="form-label fs-5"><b>{{__('ui.formImage')}}</b></label>
                  <input wire:model="temporary_images" class="inputFields w-100 rounded-2 w-75" type="file" multiple class="form-control border border-dark @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
                  @error('temporary_images.*')
                  <p class="text-danger mt_2 rounded-2">{{$message}}</p>
                  @enderror
                </div>
                @if(!empty($images))
                <div class="col-12 w-75 rounded-2">
                  <p>Preview:</p>
                  <div class="row login-card rounded-2 py-4">
                    @foreach($images as $key => $image)
                    <div class="col-12 my-3 d-flex flex-column justify-content-center align-items-center">
                      <div class="img-preview mx-auto shadow-create rounded-2 mt-3 img-fluid" style="background-image: url({{$image->temporaryUrl()}})"></div>
                      <button class="btn btn-danger shadow d-block text-center my-3 mx-auto" type="button" wire:click="removeImage({{$key}})">{{__('ui.deletebtn')}}</button>
                    </div>
                    @endforeach
                  </div>
                </div>
                @endif
              </div>
            </div>
            <input class="col-12 col-md-12" type="submit" id="join-btn" name="join" alt="Join" value="{{__('ui.submitCreate')}}">
        </form>
    </div>
  </div>
</div>
