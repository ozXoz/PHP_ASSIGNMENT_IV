@extends('admin.layouts.admin')

@section('title')
Logs
@endsection

@section('content')
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Employee</th>
                <th>Module</th>
                <th>Action</th>
                <th>Action time</th>
                <th>Ip address</th>
            </tr>
            </thead>
            <tbody>
            @foreach($logs as $log)
                <tr>
                    <td>{{ $log->employee->name }}</td>
                    <td>{{ $log->module }}</td>
                    <td>{{ $log->action }}</td>
                    <td>{{ $log->action_time }}</td>
                    <td>{{ $log->ip_address }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
