<form action="{{route('content.create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" id="input-nama" name="input-nama" placeholder="Enter text here" >
    <div class="form-check">
        
        @foreach ($genres as $genre)
        <input class="form-check-input" type="checkbox" name="answers[]" id="{{$genre->id}}" value="{{$genre->id}}">
        <label class="form-check-label" for="option1">
            {{$genre->nama_genre}}
        </label>
        @endforeach
        
    </div>
    <input type="file" id="input-image" name="input-img" accept="image/*">
    <button id="create-btn" type="submit">LESGO</button>
</form>