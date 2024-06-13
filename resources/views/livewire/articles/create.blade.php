<div class="px-4 px-md-5 mb-5">
    <div class="row gx-5 justify-content-center ">
        <div class="col-lg-8 col-xl-6 border p-5 rounded">
            @if (session('status'))
                {{ session('status') }}
            @endif
            <form wire:submit='store'>
                <div class="form-floating mb-3">
                    <input class="form-control" wire:model.blur='title' id="title" name="title" type="text">
                    <label for="name">Titolo</label>
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" wire:model.blur='subtitle' id="subtitle" name="subtitle"
                        type="text">
                    <label for="name">Sottotitolo</label>
                    @error('subtitle')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-floating mb-3">

                    <textarea wire:model.blur='content' class="form-control" id="floatingTextarea" style="height: 300px"></textarea>
                    <label for="floatingTextarea ">Contenuto</label>
                    @error('content')
                        {{ $message }}
                    @enderror

                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Salva</button>
                </div>
            </form>
        </div>
    </div>
</div>
