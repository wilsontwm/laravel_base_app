@extends('partials._welcome')

@section('head')
<link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">

<style type="text/css">

    .full-height {
        height: calc(100vh - 73px);
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
        font-family: Raleway, sans-serif;
        font-weight: 100;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
@endsection

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{ config('app.name') }}
        </div>
    </div>
</div>
@endsection


