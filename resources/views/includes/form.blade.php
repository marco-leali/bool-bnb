@csrf
<div class="container">
    <div class="mb-3">
        <label for="title_desc" class="form-label">Titolo esplicativo</label>
        <input type="text" class="form-control" id="title_desc" name="title_desc">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Link Immagine</label>
        <input type="text" class="form-control" id="image" name="image">
    </div>
    <div class="row">
        <div class="col-4 mb-3">
            <label for="room" class="form-label">Stanze</label>
            <input type="number" class="form-control" id="room" name="room" min="1">
        </div>
        <div class="col-4 mb-3">
            <label for="bathroom" class="form-label">Bagni</label>
            <input type="number" class="form-control" id="bathroom" name="bathroom" min="0">
        </div>
        <div class="col-4 mb-3">
            <label for="bed" class="form-label">Letti</label>
            <input type="number" class="form-control" id="bed" name="bed" min="1">
        </div>
    </div>
    <div class="mb-3">
        <label for="square_meters" class="form-label">Metri quadri</label>
        <input type="number" class="form-control" id="square_meters" name="square_meters" min="30">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
