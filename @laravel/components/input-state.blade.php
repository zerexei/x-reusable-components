{{-- CHECKED --}}
<input type="checkbox" name="active" value="active" @checked(old('active', $user->active)) />

{{-- SELECTED --}}
<select name="version">
    @foreach ($product->versions as $version)
    <option value="{{ $version }}" @selected(old('version')==$version)>
        {{ $version }}
    </option>
    @endforeach
</select>

{{-- REQUIRED --}}
<input type="text" name="title" value="title" @required($user->isAdmin()) />

{{-- DISABLED --}}
<button type="submit" @disabled($errors->isNotEmpty())>Submit</button>

{{-- READONLY --}}
<input type="email" name="email" value="email@laravel.com" @readonly($user->isNotAdmin()) />