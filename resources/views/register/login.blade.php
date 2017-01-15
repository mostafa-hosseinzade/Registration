@extends('base')

@section('content')
<section class="col-lg-12" style="padding-top: 100px;
    background-color: white;
    height: 400px;
    z-index: 555;">
    <div class="panel panel-primary" style="margin:20px;;direction: rtl">
        <div class="panel-heading">
            <h3 class="panel-title">فرم ورود</h3>
        </div>
        <div class="panel-body">
           {!! Form::open(array('url' => '/login')) !!}
                <div class="col-md-12 col-sm-12">
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="email">ایمیل*</label>
                        <input type="email" class="form-control input-sm" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="name">رمز عبور*	</label>
                        <input type="text" class="form-control input-sm" id="name" name="password" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-primary" value="ورود" />
                    </div>
                    
                </div>
            {!! Form::close() !!}
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</section>
@stop
           
            