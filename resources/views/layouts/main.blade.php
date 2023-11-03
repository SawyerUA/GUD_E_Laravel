<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Подключение своих стилей -->
    <link rel="stylesheet" type="text/css" href="{{asset('mycss.css')}}">

    <title>@yield('title')</title>
</head>
<body>
@include('layouts.include.header')

@yield('content')

@include('layouts.include.footer')

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- CKeditor https://ckeditor.com/ckeditor-5/download/--}}
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<!-- Подключение иконок https://fontawesome.com/icons -->
<script src="https://kit.fontawesome.com/2ffbfd9d62.js" crossorigin="anonymous"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'bold', 'italic',
                    '|', 'link', 'blockQuote',
                    '|', 'bulletedList', 'numberedList'
                ],
                shouldNotGroupWhenFull: false
            },
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    let lang = document.getElementById('lang');
    let locale = document.getElementById('locale').toString();

    if (locale.includes('en') === true ){
        lang.innerHTML = 'EN';
    }else if(locale.includes('ua') === true ){
        lang.innerHTML = 'UA';
    }else if(locale.includes('ru') === true ){
        lang.innerHTML = 'RU';
    }
</script>
</body>
</html>
