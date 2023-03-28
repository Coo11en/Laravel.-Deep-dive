@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Новость</h1>
<div class="card" style="width: 100%;">
    <div class="card-body">
        <h5 class="card-title"><?=$news[0]['title']?></h5>
        <p class="card-text"><?=$news[0]['description']?></p>
        <p style="text-align: right" class="card-text"><?=$news[0]['author']?>  <em style="font-size: 10px"><?=$news[0]['created_at']?></em></p>
    </div>
</div>
</div>
@endsection
