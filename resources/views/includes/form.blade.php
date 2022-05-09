@csrf
<div class="container">

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <p class="m-0">Compilare/Aggiustare i campi suggeriti</p>
        </div>
    @endif

    <div class="mb-3">
        <label for="title_desc" class="form-label">Titolo esplicativo</label>
        <input required type="text" class="form-control @error('title_desc') is-invalid @enderror" id="title_desc"
            name="title_desc" value="{{ old('title_desc', $apartment->title_desc) }}">
        @error('title_desc')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <div class="row">

                <div class="col-2">
                    <img src="{{ $apartment->image ?? 'https://www.edengi.it/vendor/paginesi/custom_sdk/src/php_classes/placeholder.jpg' }}" alt="preview" width="100" height="100" id="output">
                </div>
                <div class="col-10">
                    <label for="image" class="form-label">Carica L'immagine</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="loadFile(event)">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-4 mb-3">
            <label for="room" class="form-label">Stanze</label>
            <input required type="number" class="form-control @error('room') is-invalid @enderror" id="room" name="room"
                min="1" value="{{ old('room', $apartment->room) }}">
            @error('room')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-4 mb-3">
            <label for="bathroom" class="form-label">Bagni</label>
            <input required type="number" class="form-control @error('bathroom') is-invalid @enderror" id="bathroom"
                name="bathroom" min="0" value="{{ old('bathroom', $apartment->bathroom) }}">
            @error('bathroom')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-4 mb-3">
            <label for="bed" class="form-label">Letti</label>
            <input required type="number" class="form-control @error('bed') is-invalid @enderror" id="bed" name="bed"
                min="1" value="{{ old('bed', $apartment->bed) }}">
            @error('bed')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label for="square_meters" class="form-label">Metri quadrati</label>
        <input required type="number" class="form-control @error('square_meters') is-invalid @enderror"
            id="square_meters" name="square_meters" min="30"
            value="{{ old('square_meters', $apartment->square_meters) }}">
        @error('square_meters')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="row">
        <div class="col-12 mb-3">
            <label for="street" class="form-label">Via</label>
            <input required type="text" class="form-control @error('street') is-invalid @enderror" id="street"
                name="street" value="{{ old('street', $apartment->position->street ?? '') }}">
            @error('street')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label for="city" class="form-label">Città</label>
            <input required type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city"
                value="{{ old('city', $apartment->position->city ?? '') }}">
            @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label for="province" class="form-label">Provincia</label>
            <input required type="text" class="form-control @error('province') is-invalid @enderror" id="province"
                name="province" value="{{ old('province', $apartment->position->province ?? '') }}">
            @error('province')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label for="postal_code" class="form-label">Codice Postale</label>
            <input required type="text" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code"
                name="postal_code" value="{{ old('postal_code', $apartment->position->postal_code ?? '') }}">
            @error('postal_code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <h4>Servizi</h4>

    <div class="d-flex align-items-center justify-content-around my-3">
        @foreach ($services as $service)
            <div class="form-check form-switch">
                <input role="button" type="checkbox" class="form-check-input fs-4" role="switch"
                    id="service-input-{{ $service->id }}" value="{{ $service->id }}" name="services[]"
                    @if (in_array($service->id, old('services', $current_services ?? []))) checked @endif>
                <label role="button" class="form-check-label fs-5"
                    for="service-input-{{ $service->id }}">{{ $service->name }}</label>
            </div>
        @endforeach
    </div>

    <h4>Visibile</h4>

    <input type="radio" class="btn-check" name="visible" value="1" id="success-outlined" autocomplete="off"
        @if (old('visible', $apartment->visible)) checked @endif>
    <label class="btn btn-outline-success me-3" for="success-outlined"><i class="fa-solid fa-eye fa-lg"></i></label>

    <input type="radio" class="btn-check" name="visible" value="0" id="danger-outlined" autocomplete="off"
        @if (!old('visible', $apartment->visible)) checked @endif>
    <label class="btn btn-outline-danger" for="danger-outlined"><i class="fa-solid fa-eye-slash fa-lg"></i></label>

    <div class="mt-2">
        <button id="sub" type="submit" class="btn btn-primary text-light">Invia</button>
        <a class="btn btn-primary text-light " href="{{ route('admin.apartments.index') }}">Torna indietro</a>
    </div>

</div>


 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
<script type="text/javascript">
      
$(document).ready(function (e) {
 
   
   $('#image').change(function(){
            
    let reader = new FileReader();
 
    reader.onload = (e) => { 
 
      $('#output').attr('src', e.target.result); 
    }
 
    reader.readAsDataURL(this.files[0]); 
   
   });
   
});
 
</script>