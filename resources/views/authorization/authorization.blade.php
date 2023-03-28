@extends('layouts.main')
@section('content')
<div style="min-height: 100%" class="container">
<h1><b>Регистрация пользвателя</b></h1>
<form>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Эл. почта</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                    Запомнить
                </label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Войти</button>
</form>
</div>
@endsection
