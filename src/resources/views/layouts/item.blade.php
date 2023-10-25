<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>

<body>
    <div class="contact__form--content">
        <div class="contact__form--header">
            <h1>@yield('title')</h1>
        </div>

        @yield('form')
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <table class="form__table">

                <tr>
                    <th>
                        <p class="form__label-1"><span class="form__label--item">お名前</span>
                            @yield('name')
                </tr>

                <tr>
                    <div class="contact__form--group">
                        <th>
                            <p class="form__label-2"><span class="form__label--item">性別</span>
                                @yield('gender')
                    </div>
                </tr>

                <tr>
                    <div class="contact__form--group">
                        <th>
                            <p class="form__label-2"><span class="form__label--item">メールアドレス</span>
                                @yield('mail')
                    </div>
                </tr>

                <tr>
                    <div class="contact__form--group">
                        <th>
                            <p class="form__label-2"><span class="form__label--item">郵便番号</span>
                                @yield('post')
                    </div>
                </tr>

                <tr>
                    <div class="contact__form--group">
                        <th>
                            <p class="form__label-2"><span class="form__label--item">住所</span>
                                @yield('address')
                    </div>
                </tr>

                <tr>
                    <div class="contact__form--group">
                        <th>
                            <p class="form__label-2"><span class="form__label--item">建物名</span>
                                @yield('building')
                    </div>
                </tr>

                <tr>
                    <div class="contact__form--group">
                        <th>
                            <p class="form__label-3"><span class="form__label--item">ご意見</span>
                                @yield('opinion')
                    </div>
                </tr>
            </table>
            @yield('submit')
        </form>
    </div>
</body>

</html>
