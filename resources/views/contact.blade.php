@extends('master')

@section('content')

    <div class="container-fluid panel panel-default mt-5 mb-5">
        <div class="panel-heading">
            <h3 class="panel-title">Contact with Us</h3>
        </div>

        <div class="panel-body">
            <form role="form" method="POST" action="{{url('/contactinfo')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            
                <div class="form-group">
                <label class="col-md-3 control-label">Name:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name">
                </div>
                </div>

                <div class="form-group">
                <label class="col-md-3 control-label">Email:</label>
                <div class="col-md-9">
                    <input type="email" class="form-control" name="email">   
                </div>
                </div>

                <div class="form-group">
                <label class="col-md-3 control-label">Message:</label>
                <div class="col-md-9">
                <input type="text" class="form-control" name="massage">
                </div>
                </div>

                <div class="form-group">
                <div class="col-md-3 col-md-offset-3">
                    <button type="submit" class="btn btn-dark btn-block" value="Submit">Submit</button>
                </div>
                </div>
            
            
            </form>
        </div>

    </div>

@endsection