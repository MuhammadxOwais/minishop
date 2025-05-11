@extends('layouts.header_footer_skydah')
@section('space-between')
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>MESSAGE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            @foreach ($contactdata as $c)
                
                <tr>
                    <th>{{ $c->id }}</th>
                    <th>{{ $c->name }}</th>
                    <th>{{ $c->email }}</th>
                    <th>{{ $c->message }}</th>
                    <th><a href="/contactdelete/{{$c->id}}"><button class="btn btn-danger">DELETED</button></a></th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
