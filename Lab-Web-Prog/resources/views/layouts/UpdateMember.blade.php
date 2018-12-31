@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">UpdateMember</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('UpdateMember_create') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <label for="">Profile_Picture</label>
                                <input type="file" name="picture">
                            </div>
                            <div>
                                <input type="radio" name="gender"
                                       <?php if(isset($gender) && $gender=="Male")
                                           echo "checked";?>
                                       value="Male">Male;
                                <input type="radio" name="gender"
                                       <?php if(isset($gender) && $gender="female")
                                           echo "checked";?>
                                       value="Female">Female;
                            </div>
                            <div class="form-group">
                                <label for="Date_Of_Birth" class="col-md-4 control-label">Date_Of_Birth</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Address" class="col-md-4 control-label">Address</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="address">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                     UpdateMember
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
