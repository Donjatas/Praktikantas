@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registracija') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register.custom') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="vardas" class="col-md-4 col-form-label text-md-end">{{ __('Vardas') }}</label>
                                <div class="col-md-6">
                                    <input id="vardas" type="text"
                                        class="form-control @error('vardas') is-invalid @enderror" name="vardas"
                                        value="{{ old('vardas') }}" required autocomplete="vardas" autofocus>
                                    @error('vardas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="pavarde"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Pavardė') }}</label>
                                <div class="col-md-6">
                                    <input id="pavarde" type="text"
                                        class="form-control @error('pavarde') is-invalid @enderror" name="pavarde"
                                        value="{{ old('pavarde') }}" required autocomplete="pavarde" autofocus>
                                    @error('pavarde')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="slaptazodis"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Slaptažodis') }}</label>
                                <div class="col-md-6">
                                    <input id="slaptazodis" type="password"
                                        class="form-control @error('slaptazodis') is-invalid @enderror" name="slaptazodis"
                                        required autocomplete="new-slaptazodis">
                                    @error('slaptazodis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="slaptazodis-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Slaptažodžio patvirtinimas') }}</label>
                                <div class="col-md-6">
                                    <input id="slaptazodis-confirm" type="password" class="form-control"
                                        name="slaptazodis_confirmation" required autocomplete="new-slaptazodis">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="el_pastas"
                                    class="col-md-4 col-form-label text-md-end">{{ __('El. Paštas') }}</label>
                                <div class="col-md-6">
                                    <input id="el_pastas" type="email"
                                        class="form-control @error('el_pastas') is-invalid @enderror" name="el_pastas"
                                        value="{{ old('el_pastas') }}" required autocomplete="el_pastas">
                                    @error('el_pastas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="telefono_numeris"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Telefono Numeris') }}</label>
                                <div class="col-md-6">
                                    <input id="telefono_numeris" type="text"
                                        class="form-control @error('telefono_numeris') is-invalid @enderror"
                                        name="telefono_numeris" value="{{ old('telefono_numeris') }}"
                                        autocomplete="telefono_numeris">
                                    @error('telefono_numeris')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="miestas"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Miestas') }}</label>
                                <div class="col-md-6">
                                    <input id="miestas" type="text"
                                        class="form-control @error('miestas') is-invalid @enderror" name="miestas"
                                        value="{{ old('miestas') }}" autocomplete="miestas">
                                    @error('miestas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="aukstoji_mokykla"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Aukšt. Mokykla') }}</label>
                                <div class="col-md-6">
                                    <input id="aukstoji_mokykla" type="text"
                                        class="form-control @error('aukstoji_mokykla') is-invalid @enderror"
                                        name="aukstoji_mokykla" value="{{ old('aukstoji_mokykla') }}"
                                        autocomplete="aukstoji_mokykla">
                                    @error('aukstoji_mokykla')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fakultetas"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Fakultetas') }}</label>
                                <div class="col-md-6">
                                    <input id="fakultetas" type="text"
                                        class="form-control @error('fakultetas') is-invalid @enderror" name="fakultetas"
                                        value="{{ old('fakultetas') }}" autocomplete="fakultetas">
                                    @error('fakultetas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="specialybe"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Specialybė') }}</label>
                                <div class="col-md-6">
                                    <input id="specialybe" type="text"
                                        class="form-control @error('specialybe') is-invalid @enderror" name="specialybe"
                                        value="{{ old('specialybe') }}" autocomplete="specialybe">
                                    @error('specialybe')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kursas"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kursas') }}</label>
                                <div class="col-md-6">
                                    <input id="kursas" type="number"
                                        class="form-control @error('kursas') is-invalid @enderror" name="kursas"
                                        value="{{ old('kursas') }}" autocomplete="kursas">
                                    @error('kursas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registruotis') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Intercept the form submission
        $('form').submit(function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Serialize form data
            var formData = $(this).serialize();

            // Make an AJAX request to the server
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'), // Form action URL
                data: formData,
                dataType: 'json',
                success: function(response) {
                    // Log the submitted data in the browser console
                    console.log('Submitted Data:', formData);

                    // Optionally log the server response
                    console.log('Server Response:', response);

                    // Optionally show a success message
                    alert(response.message);
                },
                error: function(error) {
                    // Log the error response in the console
                    console.error('Error Response:', error.responseText);

                    // Optionally show an error message
                    alert(
                        'Error submitting the form. Please check the console for details.'
                        );
                }
            });
        });
    });
</script>
