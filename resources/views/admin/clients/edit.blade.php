@extends('admin.layouts.admin')

@section('title',__('views.admin.users.edit.title', ['name' => $client->first_name." ".$client->last_name]) )

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{ Form::open(['route'=>['admin.clients.update', $client->id],'method' => 'put','class'=>'form-horizontal form-label-left']) }}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="company_name" >
                        Company Name
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="company_name" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('company_name')) parsley-error @endif"
                               name="company_name" value="{{ $client->company_name }}" required>
                        @if($errors->has('name'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('company_name') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="business_number" >
                        Business Number
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="business_number" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('business_number')) parsley-error @endif"
                               name="business_number" value="{{ $client->business_number }}" required>
                        @if($errors->has('name'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('business_number') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name" >
                        First Name
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="first_name" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('first_name')) parsley-error @endif"
                               name="first_name" value="{{ $client->first_name }}" required>
                        @if($errors->has('first_name'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('first_name') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name" >
                        Last Name
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="last_name" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('last_name')) parsley-error @endif"
                               name="last_name" value="{{ $client->last_name }}" required>
                        @if($errors->has('last_name'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('last_name') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_number" >
                        Phone Number
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="phone_number" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('phone_number')) parsley-error @endif"
                               name="phone_number" value="{{ $client->phone_number }}" required>
                        @if($errors->has('phone_number'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('phone_number') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cell_number" >
                        Cell Number
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="cell_number" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('cell_number')) parsley-error @endif"
                               name="cell_number" value="{{ $client->cell_number }}" required>
                        @if($errors->has('cell_number'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('cell_number') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="carriers" >
                        Carriers
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="carriers" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('carriers')) parsley-error @endif"
                               name="carriers" value="{{ $client->carriers }}" required>
                        @if($errors->has('carriers'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('carriers') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hst" >
                        HST
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="hst" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('hst')) parsley-error @endif"
                               name="hst" value="{{ $client->hst }}">
                        @if($errors->has('hst'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('hst') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website" >
                        Website
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="website" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('website')) parsley-error @endif"
                               name="website" value="{{ $client->website }}">
                        @if($errors->has('website'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('website') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status" >
                        {{ __('views.admin.users.edit.active') }}
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="checkbox">
                            <label>
                                <input id="status" type="checkbox" class="@if($errors->has('status')) parsley-error @endif"
                                       name="status" @if($client->status) checked="checked" @endif value="1">
                                @if($errors->has('status'))
                                    <ul class="parsley-errors-list filled">
                                        @foreach($errors->get('status') as $error)
                                            <li class="parsley-required">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class="btn btn-primary" href="{{ URL::previous() }}"> {{ __('views.admin.users.edit.cancel') }}</a>
                        <button type="submit" class="btn btn-success"> {{ __('views.admin.users.edit.save') }}</button>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/users/edit.css')) }}
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/users/edit.js')) }}
@endsection