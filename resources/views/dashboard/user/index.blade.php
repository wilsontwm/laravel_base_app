@extends('general.layout')

@section('content')
    <section class="content-header">
        <h1>{!! $contentTitle !!}</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">People</h3>
                <div class="col-xs-6 col-md-4 col-lg-3 box-tools pull-right">
                    {!! Form::model(null, ['method' => 'GET']) !!}
                    <div class="input-group input-group-sm">
                        <input name="p" type="text" class="form-control" placeholder="Search..." value="{{ $search }}">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="box-body">
                @if($users->count() == 0)
                    <h4 class="text-center">No result found</h4>
                @endif
                <ul class="users-list clearfix">
                    @foreach( $users as $user )
                        <li>
                            {!! link_to_route_html('user.profile.show', '<img src="'.$user->getProfileImageUrl().'" alt="User Image">', $user, []) !!}
                            {!! link_to_route_html('user.profile.show', $user->name, $user, ['class' => 'users-list-name']) !!}
                            <a class="users-list-mail" href="mailto: {{ $user->email }}">{{ $user->email }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="pagination-wrapper"><?php echo $users->appends(Request::except('page'))->render(); ?></div>
                <div class="pagination-count"><?php echo $users->total() . ' People(s)'; ?></div>
            </div>
        </div>
    </section>
@endsection