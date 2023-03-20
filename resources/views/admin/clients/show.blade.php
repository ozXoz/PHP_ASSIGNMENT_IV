@extends('admin.layouts.admin')

@section('title', __('views.admin.users.show.title', ['name' => $client->first_name." ".$client->last_name]))

@section('content')
    <div class="row">
        <table class="table table-striped table-hover">
            <tbody>

            <tr>
                <th>Name</th>
                <td>{{ $client->first_name." ".$client->last_name }}</td>
            </tr>

            <tr>
                <th>Company Name</th>
                <td>
                    {{ $client->company_name }}
                </td>
            </tr>

            <tr>
                <th>Cell Number</th>
                <td>{{ $client->cell_number }}</td>
            </tr>

            <tr>
                <th>Phone Number</th>
                <td>{{ $client->phone_number }}</td>
            </tr>

            <tr>
                <th>HST</th>
                <td>
                    {{ $client->hst }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
