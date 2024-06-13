<x-main>
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{route('articles.index')}}" class="btn btn-primary btn-lg px-4 gap-3">Vedi elenco Articoli</a>
            {{-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> --}}
          </div>
        </div>
      </div>
</x-main>