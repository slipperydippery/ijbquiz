<!-- Titel Form Input -->
<div class="form-group">
    <label for="name">Titel</label>
    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', request('name') ?? $measure->name ?? null) }}" autofocus>

	@if ($errors->has('name'))
        <span class="invalid-feedback">
	        <strong>{{ $errors->first('name') }}</strong>
	    </span>
	@endif
</div>

<!-- Omschrijving Form Input -->
<div class="form-group">
    <label for="description">Omschrijving</label>
    <textarea name="description" id="description" rows="7" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description', request('description') ?? $measure->description ?? null) }}</textarea>

	@if ($errors->has('description'))
        <span class="invalid-feedback">
	        <strong>{{ $errors->first('description') }}</strong>
	    </span>
	@endif
</div>

<!-- Link Form Input -->
<div class="form-group">
    <label for="link">Link</label>
    <input id="link" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="{{ old('link', request('link') ?? $measure->link ?? null) }}" autofocus>

	@if ($errors->has('link'))
        <span class="invalid-feedback">
	        <strong>{{ $errors->first('link') }}</strong>
	    </span>
	@endif
</div>

<!-- Add Submit Field -->
<div class="form-group">
    <input type="submit" value=" {{ $submittext }} " class="btn btn-primary form-control" />
</div>