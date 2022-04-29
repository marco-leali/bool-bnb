@csrf
<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3">
        <label for="title_desc" class="form-label">Titolo esplicativo</label>
        <input type="text" class="form-control" id="title_desc" name="title_desc"
            value="{{ old('title_desc', $apartment->title_desc) }}">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Link Immagine</label>
        <input type="text" class="form-control" id="image" name="image"
            value="{{ old('image', $apartment->image) }}">
    </div>
    <div class="row">
        <div class="col-4 mb-3">
            <label for="room" class="form-label">Stanze</label>
            <input type="number" class="form-control" id="room" name="room" min="1"
                value="{{ old('room', $apartment->room) }}">
        </div>
        <div class="col-4 mb-3">
            <label for="bathroom" class="form-label">Bagni</label>
            <input type="number" class="form-control" id="bathroom" name="bathroom" min="0"
                value="{{ old('bathroom', $apartment->bathroom) }}">
        </div>
        <div class="col-4 mb-3">
            <label for="bed" class="form-label">Letti</label>
            <input type="number" class="form-control" id="bed" name="bed" min="1"
                value="{{ old('bed', $apartment->bed) }}">
        </div>
    </div>
    <div class="mb-3">
        <label for="square_meters" class="form-label">Metri quadrati</label>
        <input type="number" class="form-control" id="square_meters" name="square_meters" min="30"
            value="{{ old('square_meters', $apartment->square_meters) }}">
    </div>
    <button type="submit" class="btn btn-primary text-light">Invia</button>
    <a class="btn btn-primary text-light " href="{{ route('admin.apartments.index') }}">Torna indietro</a>

</div>
