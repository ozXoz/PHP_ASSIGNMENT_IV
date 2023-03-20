@extends('admin.layouts.admin')

@section('content')
    <div class="row">
        <table class="table table-striped table-hover">
            <tbody>

            <tr>
                <th>Client Name</th>
                <td>{{ $client_event->client->first_name." ".$client_event->client->last_name }}</td>
            </tr>

            <tr>
                <th>Notification Name</th>
                <td>
                    {{ $client_event->notification->name }}
                </td>
            </tr>

            <tr>
                <th>Notification Type</th>
                <td>
                    {{ $client_event->notification->type }}
                </td>
            </tr>

            <tr>
                <th>Start Date</th>
                <td>
                    {{ $client_event->start_time }}
                </td>
            </tr>   

            <tr>
                <th>Frequency</th>
                <td>
                    {{ $client_event->frequency }}
                </td>
            </tr>

            <tr>
                <th>Status</th>
                <td>
                    @if($client_event->status)
                        <span class="label label-primary">{{ __('views.admin.users.index.active') }}</span>
                    @else
                        <span class="label label-danger">{{ __('views.admin.users.index.inactive') }}</span>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
