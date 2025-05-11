@extends('layouts.header_footer_skydah')
@section('space-between')
    <div class="table-responsive mt-5 fw-bold">
        <table class="table">
            <thead>
                <tr>
                    <td style="font-weight: bolder;">ID</td>
                    <td style="font-weight: bolder;">CLIENT_NAME</td>
                    <td style="font-weight: bolder;">CLIENT_MESSAGE</td>
                    <td style="font-weight: bolder;">CLIENT_IMAGE</td>
                    <td style="font-weight: bolder;">DELETED</td>
                    <td style="font-weight: bolder;">UPDATE</td>
                    <td style="font-weight: bolder;">INSERT_WEBSITE</td>
                </tr>
            </thead>
            @foreach ($cosdata as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->client_name }}</td>
                    <td>{{ $u->client_message }}</td>
                    <td><img src="{{ $u->client_image }}"></td>
                    <td><a href="/clientdeleted/{{ $u->id }}"><i class="fa-solid fa-trash"
                                style="font-size: 25px; text-align: center; margin-left: 15px;"></i></a></td>
                    <td><a href="/cosupdate/{{ $u->id }}"
                            style="font-size: 25px; text-align: center; margin-left: 15px;"><i
                                class="fa-solid fa-pen-nib"></i></a></td>
                    <td><a href="/cosmatic/{{ $u->id }}" class="btn btn-primary">INSERTED</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
