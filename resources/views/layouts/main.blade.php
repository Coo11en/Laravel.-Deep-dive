<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Марк Отто, Джейкоб Торнтон и контрибьюторы Bootstrap">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Новости</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/product.css') }}" rel="stylesheet">
</head>
<body>

<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="/" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Начало</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="/about">О сервисе</a>
        <a class="py-2 d-none d-md-inline-block" href="/adding">Добавить новость</a>
        <a class="py-2 d-none d-md-inline-block" href="/category">Категории</a>
        <a class="py-2 d-none d-md-inline-block" href="/order">Заказ</a>
        <a class="py-2 d-none d-md-inline-block" href="/authorization">Вход</a>
    </nav>
</header>

<main style="min-height: calc(100vh - 288px);">

        @yield('content')

</main>

<footer class="container py-5">
    <div class="row">
        <div class="col-12 col-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Продукт</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            <small class="d-block mb-3 text-muted">&copy; 2017–2022</small>
        </div>
        <div class="col-6 col-md">
            <h5>Информация</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Адрес</a></li>
                <li><a class="link-secondary" href="#">Финансирование</a></li>
                <li><a class="link-secondary" href="#">Юридический адрес</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Новостные ресурсы</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Яндекс новости</a></li>
                <li><a class="link-secondary" href="#">РИА Новости</a></li>
                <li><a class="link-secondary" href="#">The Washington Post</a></li>
                <li><a class="link-secondary" href="#">BBC</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>О нас</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Наша команда</a></li>
                <li><a class="link-secondary" href="#">Руководство</a></li>
                <li><a class="link-secondary" href="#">Награды</a></li>
                <li><a class="link-secondary" href="/feedback">Отзывы и пожелания</a></li>
            </ul>
        </div>
    </div>
</footer>


{{--<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>--}}


</body>
</html>
