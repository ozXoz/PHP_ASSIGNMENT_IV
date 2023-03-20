@extends('admin.layouts.admin')

@section('title', 'Create a client event')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{ Form::open(['route'=>['admin.client_events.store'],'method' => 'post','class'=>'form-horizontal form-label-left']) }}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="notification_id">
                        Notification
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="notification_id" name="notification_id" class="select2" style="width: 100%" autocomplete="off">
                            @foreach($notifications as $notification)
                                <option value="{{ $notification->id }}">{{ $notification->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="client_id">
                        Client
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="client_id" name="client_id" class="select2" style="width: 100%" autocomplete="off">
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->first_name." ".$client->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="start_time" >
                        Start date/time
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="start_time" type="datetime-local" class="form-control col-md-7 col-xs-12 @if($errors->has('start_time')) parsley-error @endif"
                               name="start_time" value="" required>
                        @if($errors->has('start_time'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('start_time') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="frequency" >
                        Frequency
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="frequency" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('frequency')) parsley-error @endif"
                               name="frequency" required>
                        @if($errors->has('frequency'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('frequency') as $error)
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
                                       name="status" value="1">
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