@extends('admin.layouts.admin')

@section('title')
Client events
@endsection

@section('content')
<div class="pull-right">
    <a class="btn btn-success" href="{{ route('admin.client_events.create') }}">+Add</a>
</div>
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Client Name</th>
                <th>Notification Name</th>
                <th>Type</th>
                <th>Start Date</th>
                <th>Frequency</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($client_events as $client_event)
                <tr>
                    <td>{{ $client_event->client->first_name." ".$client_event->client->last_name }}</td>
                    <td>{{ $client_event->notification->name }}</td>
                    <td>{{ $client_event->notification->type }}</td>
                    <td>{{ $client_event->start_time }}</td>
                    <td>{{ $client_event->frequency }}</td>
                    <td>
                        @if($client_event->status)
                            <span class="label label-primary">{{ __('views.admin.users.index.active') }}</span>
                        @else
                            <span class="label label-danger">{{ __('views.admin.users.index.inactive') }}</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.client_events.show', [$client_event->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.show') }}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.client_events.edit', [$client_event->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="{{ route('admin.client_events.destroy', [$client_event->id]) }}" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
