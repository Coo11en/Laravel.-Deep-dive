@extends('layouts.main')
@section('content')
<div style="min-height: 100%" class="container">
    <br>
    <h1><b>Форма заказа</b></h1>
    @if($errors->any())
    @foreach($errors->all() as $error)
    @include('inc.messages', ['message' => $error])
    @endforeach
    @endif
    <form method="post" action="{{ route('order') }}">
        @csrf
        <div class="row mb-3">
            <label for="login" class="col-sm-3 col-form-label">Имя заказчика</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="login" id="login">
            </div>
        </div>
        <div class="row mb-3">
            <label for="phone" class="col-sm-3 col-form-label">Номер телефона</label>
            <div class="col-sm-9">
                <input type="tel" class="form-control" name="phone" id="phone">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-3 col-form-label">E-mail</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" name="email" id="email">
            </div>
        </div>
        <div class="mb-3">
            <label for="info" class="form-label">Информация о заказе</label>
            <textarea class="form-control" name="info" id="info" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
@endsection
