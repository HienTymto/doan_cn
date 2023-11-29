<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body>
    <div class="row">
        <div class="col-sm-9 p-3">
            logo
        </div>
        <div class="col-sm-3 p-3">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class=" text-secondary text-decoration-none h6">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Đăng
                            nhập</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Đăng
                                ký</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="bg-primary col-sm-1 p-3 rounded"></div>

        <div class=" col-sm-11 p-3">
            <form action="">
                <div class="container pt-5">
                    <label for="exampleFormControlInput1" class="form-label">Tiêu đề:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="container pt-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Tóm tắt bài viết:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="container pt-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Nội dung:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
            </form>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>

</html>
