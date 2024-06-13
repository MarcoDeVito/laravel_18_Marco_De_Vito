<div class="px-4 px-md-5 mb-5">
    <div class="row gx-5 justify-content-center ">
        <div class="col-lg-8 col-xl-6 border p-5 rounded">
            @if (session('status'))
                {{ session('status') }}
            @endif
            <form wire:submit='update'>
                <div class="form-floating mb-3">
                    <input class="form-control" wire:dirty.class="border-warning" wire:model='title' id="title" name="title" type="text">
                    <label for="name">Titolo</label>
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" wire:dirty.class="border-warning" wire:model='subtitle' id="subtitle" name="subtitle"
                        type="text">
                    <label for="name">Sottotitolo</label>
                    @error('subtitle')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-floating mb-3">

                    <textarea wire:dirty.class="border-warning" wire:model='content' class="form-control" id="floatingTextarea" style="height: 300px"></textarea >
                    
                      
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
