@extends('layouts.header_footer_skydah')
@section('space-between')
    <div class="table-responsive">
        <table class="table bg-light">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                </tr>
            </thead>
            @foreach ($data as $u)
                
                <tr>
                    <th>{{ $u->id }}</th>
                    <th>{{ $u->name }}</th>
                    <th>{{ $u->email }}</th>
                    <th>{{ $u->password }}</th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
