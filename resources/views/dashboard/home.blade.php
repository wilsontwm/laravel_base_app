@extends('general.layout')

@section('content')
<section class="content-header">
    <h1>Base dashboard</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Welcome to {{ config( 'app.name' ) }}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            You are successfully logged in!
        </div>
        <!-- /.box-body -->
    </div>
</section>
@endsection
