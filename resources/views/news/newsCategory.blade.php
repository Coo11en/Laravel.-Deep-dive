@extends('layouts.main')
@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal"><?=$category?></h1>
            <p class="lead fw-normal">Описание категории!</p>
            <a class="btn btn-outline-secondary" href="/category">Категории</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="row row-cols-2">
    @if(empty($news))
        <h2>Записей нет!!</h2>
        @else
    @foreach ($news as $key => $newses)
    <div class="flex-md-equal">
        <a style="text-decoration: none; color: black" href="/category/<?=$category?>/news-<?=$key+1?>"><div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5"><?=$newses['title']?></h2>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                    <p style="color: #0dcaf0; padding-top: 50px" class="col-lg"><?=$newses['digestNews']?></p>
                </div>
            </div></a>
    </div>
    @endforeach
        @endif
    </div>
    </div>
@endsection

