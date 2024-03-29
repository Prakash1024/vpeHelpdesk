@extends('layouts.app')

@section('content')
<section class="vh-100 bg-image"
  style="background-image: url('{{ asset('register_bg.webp') }}')">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card p-3" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-outline mb-4">
                  <label class="form-label" for="name">{{ __('Name') }}</label>
                  <input type="text" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="email">{{ __('Email Address') }}</label>
                  <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="password">{{ __('Password') }}</label>
                  <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                  <input type="password" id="password-confirm" class="form-control form-control-lg"  name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="form-check d-flex mb-5">
                    <div class="row">
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="role" id="role2" value="2" checked />
                                <label class="form-check-label" for="option1">{{ __('Hospital') }}</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="role" id="role0" value="0" />
                                <label class="form-check-label" for="option2">{{ __('Customercare') }}</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">{{ __('Register') }}</button>
                </div>
                
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
    .gradient-custom-3 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
label{
  font-size: 16px;
}
</style>
@endsection
