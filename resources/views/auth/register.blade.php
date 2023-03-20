@extends('auth.layouts.auth')

@section('body_class','register')

@section('content')
    <div>
        <div class="login_wrapper">
            <div class="animate form">
                <section class="login_content">
                    {{ Form::open(['route' => 'register']) }}
                        <h1>{{ __('views.auth.register.header') }}</h1>
                        <div>
                            <input type="text" name="name" class="form-control"
                                   placeholder="{{ __('views.auth.register.input_0') }}"
                                   value="{{ old('name') }}" required autofocus/>
                        </div>
                        <div>
                            <input type="text" name="first_name" class="form-control"
                                   placeholder="First Name"
                                   value="{{ old('first_name') }}" required autofocus/>
                        </div>
                        <div>
                            <input type="text" name="last_name" class="form-control"
                                   placeholder="Last Name"
                                   value="{{ old('last_name') }}" required autofocus/>
                        </div>
                        <div>
                            <input type="email" name="email" class="form-control"
                                   placeholder="{{ __('views.auth.register.input_1') }}"
                                   value="{{ old('email') }}"
                                   required/>
                        </div>
                        <div>
                            <input type="text" name="cell_number" class="form-control"
                                   placeholder="Cell number"
                                   value="{{ old('cell_number') }}"
                                   required/>
                        </div>
                        @php
                            $positions = ["Manager", "Senior Accountant", "Junior Accountant", "Chartered Accountant", "Book Keeper"];
                        @endphp
                        <div style="margin-bottom: 10px;">
                            <select id="position" name="position" style="width: 100%" autocomplete="off" class="select2 form-control">
                                @foreach($positions as $position)
                                    <option value="{{ $position }}">{{ $position }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control"
                                   placeholder="{{ __('views.auth.register.input_2') }}"
                                   required=""/>
                        </div>
                        <div>
                            <input type="password" name="password_confirmation" class="form-control"
                                   placeholder="{{ __('views.auth.register.input_3') }}"
                                   required/>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (!$errors->isEmpty())
                            <div class="alert alert-danger" role="alert">
                                {!! $errors->first() !!}
                            </div>
                        @endif

                        @if(config('auth.captcha.registration'))
                            @captcha()
                        @endif

                        <div>
                            <button type="submit"
                                    class="btn btn-default submit">{{ __('views.auth.register.action_1') }}</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">{{ __('views.auth.register.message') }}
                                <a href="{{ route('login') }}" class="to_register"> {{ __('views.auth.register.action_2') }} </a>
                            </p>

                            <div class="clearfix"></div>
                            <br/>

                            <div>
                                <div class="h1">{{ config('app.name') }}</div>
                                <p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('views.auth.register.copyright_0') }}</p>
                                <p>{{ __('views.auth.register.copyright_1') }}</p>
                            </div>
                        </div>
                    {{ Form::close() }}
                </section>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    @parent

    {{ Html::style(mix('assets/auth/css/register.css')) }}
@endsection
