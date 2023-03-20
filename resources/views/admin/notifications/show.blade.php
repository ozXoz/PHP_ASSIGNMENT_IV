@extends('admin.layouts.admin')

@section('content')
    <div class="row">
        <table class="table table-striped table-hover">
            <tbody>

            <tr>
                <th>Name</th>
                <td>{{ $notification->name }}</td>
            </tr>

            <tr>
                <th>Type</th>
                <td>
                    {{ $notification->type }}
                </td>
            </tr>

            <tr>
                <th>Status</th>
                <td>
                    @if($notification->status)
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
