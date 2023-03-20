@extends('admin.layouts.admin')

@section('title')
Clients
@endsection

@section('content')
<div class="pull-right">
    <a class="btn btn-success" href="{{ route('admin.clients.create') }}">+Add</a>
</div>
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Company Name</th>
                <th>Name</th>
                <th>Business Number</th>
                <th>Phone Number</th>
                <th>HST</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->company_name }}</td>
                    <td>{{ $client->first_name." ".$client->last_name }}</td>
                    <td>{{ $client->business_number }}</td>
                    <td>{{ $client->cell_number }}</td>
                    <td>{{ $client->hst }}</td>
                    <td>
                        @if($client->status)
                            <span class="label label-primary">{{ __('views.admin.users.index.active') }}</span>
                        @else
                            <span class="label label-danger">{{ __('views.admin.users.index.inactive') }}</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.clients.show', [$client->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.show') }}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.clients.edit', [$client->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="{{ route('admin.clients.destroy', [$client->id]) }}" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
