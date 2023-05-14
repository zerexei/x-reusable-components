<div>
    <label for="{{ str($label)->lower()->slug() }}">{{ $label }}</label>

    <input id="{{ str($label)->lower()->slug() }}" type="text" class="@error($name) is-invalid @else is-valid @enderror">

    @error($name)
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror
</div>
