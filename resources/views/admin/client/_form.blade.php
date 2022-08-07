
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
           value="{{ old('name', $client->name) }}">

    @error('name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="address" class="form-label">address</label>
    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
           value="{{ old('address', $client->address) }}">

    @error('address')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>

    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
              placeholder="Place some text here"
              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
              rows="5">{{ old('description', $client->description) }}</textarea>


    @error('description')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<script>
    CKEDITOR.replace('description');
</script>

<script>
    var loadFile = function (event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };

</script>

<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <img id="output" src="{{ $client->image_url}}" alt="" height="200" class="d-block m-3">
    <input type="file" class="form-control @error('image') is-invalid @enderror" onchange="loadFile(event)"
           name="image">

    @error('image')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>


<button type="submit" class="btn btn-primary">Save</button>
