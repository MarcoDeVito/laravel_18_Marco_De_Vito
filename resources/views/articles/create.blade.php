<x-main>
    
    <div class="px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">
    
                <form action="#" method="POST"
                    enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" value
                            name="name" type="text">
                        <label for="name">Nome</label>
                    </div>
                    <div class="form-control mb-3">
                        <div class="form-check">
                            <input class="form-check-input"
                                type="checkbox" id="category_id"
                                name="categories[]" value>
                            <label class="form-check-label"
                                for="category_id">Cronaca</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input"
                                type="checkbox" id="category_id"
                                name="categories[]" value>
                            <label class="form-check-label"
                                for="category_id">Sport</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-control" name="user_id"
                            id="user_id">
                            <option value="1">Tizio caio</option>
                            <option value="2">Sempronio </option>
                        </select>
                        <label for="email">Utente</label>
                    </div>
                    <div class="form-floating mb-3">
                        <img width="200"
                            src="https://images.freeimages.com/images/large-previews/83c/barn-silo-detail-5-1210478.jpg"
                            class="img-responsive">
                        <input class="form-control" id="image"
                            name="image" value
                            type="file">
    
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg"
                            type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>
