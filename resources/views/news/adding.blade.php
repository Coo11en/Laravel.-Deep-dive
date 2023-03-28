@extends('layouts.main')
@section('content')
    <div class="container">
    <form action="#">
        <h1><b>Добавление новости</b></h1>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Название новости</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Описание новости</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Краткое описание новости</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>
        <p><input class="btn btn-outline-secondary" type="submit" value="Добавить"></p>
    </form>
    </div>
@endsection
