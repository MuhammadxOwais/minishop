@extends('layouts.header_footer_skydah')
@section('space-between')
    <div style="width: 40%;">
        <form method="POST" enctype="multipart/form-data" action="{{ URL::TO('/Clientinsert') }}">
            @csrf
            <input type="file" class="mt-5 ml-5 form-control w-100" name="proimg">
            <input type="text" placeholder="PRODUCT_NAME" class="mt-3 ml-5 form-control w-100" name="proName">
            <textarea cols="30" rows="7" class="mt-3 ml-5 form-control w-100" name="USER_MESSAGE" placeholder="promessage"></textarea>
            <button class="ml-5 mt-5 btn btn-primary">ADD_PRODUCT</button>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
