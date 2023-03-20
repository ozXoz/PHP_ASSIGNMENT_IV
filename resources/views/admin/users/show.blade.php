@extends('admin.layouts.admin')

@section('title', __('views.admin.users.show.title', ['name' => $user->name]))

@section('content')
    <div class="row">
        <table class="table table-striped table-hover">
            <tbody>
            <tr>
                <th>{{ __('views.admin.users.show.table_header_0') }}</th>
                <td><img src="{{ $user->avatar }}" class="user-profile-image"></td>
            </tr>

            <tr>
                <th>Username</th>
                <td>{{ $user->name }}</td>
            </tr>

            <tr>
                <th>Name</th>
                <td>{{ $user->first_name." ".$user->last_name }}</td>
            </tr>

            <tr>
                <th>{{ __('views.admin.users.show.table_header_2') }}</th>
                <td>
                    <a href="mailto:{{ $user->email }}">
                        {{ $user->email }}
                    </a>
                </td>
            </tr>

            <tr>
                <th>Cell Number</th>
                <td>{{ $user->cell_number }}</td>
            </tr>

            <tr>
                <th>{{ __('views.admin.users.show.table_header_3') }}</th>
                <td>
                    {{ $user->roles->pluck('name')->implode(',') }}
                </td>
            </tr>

            <tr>
                <th>Position</th>
                <td>
                    {{ $user->position }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
