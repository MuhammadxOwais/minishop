@extends('layouts.header_footer_skydah')
@section('space-between')
    <div style="width: 40%;">
        <form method="POST" enctype="multipart/form-data" action="{{ URL::TO('/insert') }}">
            @csrf
            <input type="file" class="mt-5 ml-5 form-control w-100" name="proimg">
            <input type="text" placeholder="PRODUCT_NAME" class="mt-3 ml-5 form-control w-100" name="proName">
            <input type="text" placeholder="PRODUCT_PRICE" class="mt-3 ml-5 form-control w-100" name="proPrice">
            <textarea name="prodetail" cols="5" rows="7" class="mt-3 ml-5 form-control w-100" placeholder="PRODUCT_DETAIL"></textarea>
            <button class="ml-5 mt-5 btn btn-primary">ADD_sPRODUCT</button>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
