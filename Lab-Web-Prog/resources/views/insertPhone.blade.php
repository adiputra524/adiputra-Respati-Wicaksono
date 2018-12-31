@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Phone_Insert</div>

                <div class="panel-body">
                    <form class="form-horizontal" action="/insertPhone" method="POST" enctype="multipart/form-data">
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

                        <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                            <label for="brand" class="col-md-4 control-label">Brand</label>

                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control" name="brand" value="{{ old('brand') }}" required>
                            </div>
                        </div>
                        <div>
                            <label for="">Profile_Picture</label>
                            <input type="file" name="picture">
                        </div>
                        <div class="form-group">
                        <label for="Description" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Description">
                            </div>
                         </div>
                        <div class="form-group">
                            <label for="Price" class="col-md-4 control-label">Price</label>
                            <div class="col-md-6">
                                <input type="int" class="form-control" name="Price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Discount" class="col-md-4 control-label">Discount</label>
                            <div class="col-md-6">
                                <input type="int" class="form-control" name="Discount">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Stock" class="col-md-4 control-label">Stock</label>
                            <div class="col-md-6">
                                <input type="int" class="form-control" name="Stock">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
