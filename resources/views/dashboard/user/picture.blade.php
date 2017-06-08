@extends('general.layout')

@section('content')
    <section class="content-header">
        <h1>{!! $contentTitle !!}</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Change profile picture</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="profile-picture-container col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">
                        <img src="{!! $user->getProfileImageUrl() !!}" class="img-thumbnail profile-picture-img" />
                    </div>
                </div>
                @if( $user->hasProfileImage() )
                <div class="row margin">
                    <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4">
                        {!! Form::model($user, ['url' => route('user.picture.delete', $user->id), 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                @endif
                <div class="row margin">
                    <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4">
                        {!! Form::model($user, ['id' => 'upload-profile-image-form', 'url' => route('user.picture.create'), 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}
                        {!! Form::file('image', ['id' => 'profile-image-input', 'class' => 'hidden', 'accept' => "image/x-png, image/jpeg, image/png"]) !!}
                        <a href="javascript:void(0)" onclick="uploadProfileImage()" class="btn btn-primary btn-block">Change picture</a>
                        {!! Form::close() !!}
                    </div>
                </div>

                <div style="clear:both"></div>
            </div>
            <!-- /.box-body -->

        </div>
    </section>
    <script>
        function uploadProfileImage() {
            event.preventDefault();
            $('#profile-image-input').click();
        }
        $(document).ready(function(){
            $("#profile-image-input").on('change',function(){
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.readAsDataURL(this.files[0]);

                    $('#upload-profile-image-form').submit();
                }
            });
        });
    </script>
@endsection