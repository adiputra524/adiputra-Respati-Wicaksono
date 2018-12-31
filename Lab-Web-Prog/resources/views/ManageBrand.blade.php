@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Manage_Brand</div>

                    <div class="panel-body"></div>
                    <form class="form-horizontal" action="{{url('/manageBrand')}}" method="Post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="insert Brand" class="col-md-4 control-label">brand</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="brand_name">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection