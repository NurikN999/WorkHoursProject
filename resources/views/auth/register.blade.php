@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <img src="https://s3-alpha-sig.figma.com/img/0a80/409f/7de4113730e54e4e1ada4bd2c4220906?Expires=1649635200&Signature=fV8Fcr0b3NVS-b~1FZXYjI9TGap2ohVluLzcHyc4-kNYyiWGTx2ui9U7Z9XzJBdO-8HjkwWXzrqAaPj~Y3Y8ZphlInIUZLVI-VcZ0ssDpfHdgF6Doe1UjAKn9n2FTfAh6PlYehQ0mMz36hXMKKDIZxUzJynsQh0NakIyflWauthYgC3NpKrJ11n-S29R6OlZNxZdvY4LSdqZV5El~s1oH1sH1dpbMy8bx7D7E3map~T5H4-4pjuY3aWigWbwwthIeez3k3rpKBIeA14U44v6YSCZaRg-Gex9R7aEFbTwGC5FUq93JwGAwN~2giMq~hHjlisg0wvNC6TglW1qoNO5~A__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA" class="img-fluid p-3">
        </div>

        <div class="col-md-6" style="margin: auto 0">
            <div class="card">
                <div class="p-4" style="font-size: 28px; text-align: center; font-weight: bold">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }} <span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Surname') }} <span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }} <span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }} <span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="job_title" class="col-md-4 col-form-label text-md-end">{{ __('Job Title') }} <span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="job_title" type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" value="{{ old('job_title') }}" required autocomplete="job_title">

                                @error('job_title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
