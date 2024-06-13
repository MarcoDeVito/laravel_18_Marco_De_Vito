<div class="rounded-3 py-5 px-4 px-md-5 mb-5">

    <div class="container mt-5">
        <div class="align-middle gap-2 d-flex justify-content-between">
            <h3>Articoli inseriti</h3>
            <span style="width:30%">Articoli visualizzati: <select class="d-inline form-select form-select-sm" wire:model.live='paginateNumber' style="width:20%">
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option selected value="10">10</option>
                    <option selected value="25">25</option>
                </select>
            </span>
            <form class="d-flex" role="search" action="#" method="POST">
                <input class="form-control me-2" wire:model.live="search" name="search" type="search"
                    placeholder="Cerca Articolo" aria-label="Search">
            </form>

            <a href="{{ route('articles.create') }}" class="btn btn btn-success me-md-2">
                Crea Nuovo Articolo
            </a>
        </div>
        <table class="table border mt-2">
            @if (session('status'))
                <div class="bg-success p-3 mt-3 border rounded-5 border-2">{{ session('status') }}</div>
            @endif
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Sottotitolo</th>
                    <th scope="col">Contenuto</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>
                            {{ $article->title }}
                        </td>
                        <td>{{ $article->subtitle }}</td>
                        <td>{{ str($article->content)->limit(50) }}</td>
                        <td>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                <a href="{{ route('articles.show', ['article' => $article]) }}"
                                    class="btn btn-primary me-md-2">
                                    Visualizza
                                </a>
                                <a href="{{ route('articles.edit', ['article' => $article]) }}"
                                    class="btn btn-warning me-md-2">
                                    Modifica
                                </a>
                                <a href="#" wire:click.prevent='destroy({{ $article }})'
                                    class="btn btn-danger me-md-2">Elimina</a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <p>Nessun Articolo, <a href="{{ route('articles.create') }}">Crea nuovo articolo</a> </p>
                @endforelse
            </tbody>
        </table>
        {{ $articles->links() }}
    </div>
</div>
