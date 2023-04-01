@extends('layouts.admin')
@section('content')
    @foreach ($category as $key => $categories)
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
        <!-- card -->
        <div class="card ">
            <!-- card body -->
            <div class="card-body">
                <!-- heading -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h4 class="mb-0"><?=$categories?></h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                        <i class="bi bi-briefcase fs-4"></i>
                    </div>
                </div>
                <!-- project number -->
                <div>
                    <a class="btn" href="/category/<?=$key?>">
                        <h1 class="fw-bold">18 Новостей</h1>
                    </a>
                    <p class="mb-0">Краткое описание</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
