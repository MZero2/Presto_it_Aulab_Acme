<div class="section-category my-2">
    <div class="container-card-category" id="categorie-annunci">
        <h1 class="text-center">{{__('ui.ourCategories')}}</h1>
        <section class="hero-section">
            <div class="card-grid">
              <a class="cardcategory" href="{{ route('categoryShow', ['category' => 1]) }}">
                <div class="card__background" style="background-image: url(/storage/img/motori.jpg)"></div>
                <div class="card__content ps-3">
                  <h3 class="card__heading fs-5">{{__('ui.motors')}}</h3>
                </div>
              </a>
              <a class="cardcategory" href="{{ route('categoryShow', ['category' => 2]) }}">
                <div class="card__background" style="background-image: url(/storage/img/abbigliamento.jpg)"></div>
                <div class="card__content ps-3">
                  <h3 class="card__heading fs-5">{{__('ui.clothing')}}</h3>
                </div>
              </a>
              <a class="cardcategory" href="{{ route('categoryShow', ['category' => 3]) }}">
                <div class="card__background" style="background-image: url(/storage/img/arredamento.jpg)"></div>
                <div class="card__content ps-3">
                  <h3 class="card__heading fs-5">{{__('ui.homeDecor')}}</h3>
                </div>
              </li>
              <a class="cardcategory" href="{{ route('categoryShow', ['category' => 4]) }}">
                <div class="card__background" style="background-image: url(/storage/img/tecnologia.jpg)"></div>
                <div class="card__content ps-3">
                  <h3 class="card__heading fs-5">{{__('ui.technology')}}</h3>
                </div>
            </a>
            <a class="cardcategory" href="{{ route('categoryShow', ['category' => 5]) }}">
              <div class="card__background" style="background-image: url(/storage/img/musica.jpeg)"></div>
              <div class="card__content ps-3">
                <h3 class="card__heading fs-5">{{__('ui.music')}}</h3>
              </div>
            </li>
            </a>
            <a class="cardcategory" href="{{ route('categoryShow', ['category' => 6]) }}">
            <div class="card__background" style="background-image: url(/storage/img/attrezzatura.jpg)"></div>
            <div class="card__content ps-3">
              <h3 class="card__heading fs-5">{{__('ui.equipment')}}</h3>
            </div>
            </a>
            <a class="cardcategory" href="{{ route('categoryShow', ['category' => 7]) }}">
            <div class="card__background" style="background-image: url(/storage/img/sport.jpg)"></div>
            <div class="card__content ps-3">
              <h3 class="card__heading  fs-5">{{__('ui.sport')}}</h3>
            </div>
            </a>
            <a class="cardcategory" href="{{ route('categoryShow', ['category' => 8]) }}">
            <div class="card__background" style="background-image: url(/storage/img/film.jpg)"></div>
            <div class="card__content ps-3">
              <h3 class="card__heading fs-5">{{__('ui.movies')}}</h3>
            </div>
            </a>
            <div>
        </section>
    </div>
</div>