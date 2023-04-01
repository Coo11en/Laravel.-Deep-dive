@extends('layouts.main')
@section('content')
<div style="min-height: 100%" class="container">
    <br>
<h1><b>Обратная связь</b></h1>
@if($errors->any())
    @foreach($errors->all() as $error)
        @include('inc.messages', ['message' => $error])
    @endforeach
@endif
<form method="post" action="{{ route('feedback') }}">
    @csrf
    <div class="row mb-3">
        <label for="login" class="col-sm-3 col-form-label">Логин пользователя</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="login" id="login">
        </div>
    </div>
    <div class="mb-3">
        <label for="comment" class="form-label">Отзыв (Комментарий)</label>
        <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
</div>
@endsection
