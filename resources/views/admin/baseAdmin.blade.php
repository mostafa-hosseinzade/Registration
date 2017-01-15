<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ url('/') }}/assets/bootstrap/css/bootstrap.rtl.css">
        <link rel="stylesheet" href="{{ url('/') }}/assets/bootstrap/Full/datatable/jquery.dataTables.min.css">
        <script src="{{url('/')}}/assets/web/assets/jquery/jquery.min.js"></script>
       
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">دانشگاه علم و فرهنگ</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/admin/users')}}">کارجویان <span class="sr-only">(current)</span></a></li>
                        <li><a href="{{url('/admin/department')}}">گروه های درسی</a></li>
                        <li class="dropdown">
                            <a href="{{url('/admin/course')}}" >درس ها</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{url('/admin/admins')}}" > کاربران</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-form navbar-left">
                        <li><a href="{{url('/login/logout')}}">خروج</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            @yield('content')
        </div>
        
        <div class="modal fade" id="modalSendData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <h3>عملیات با موفقیت انجام شد !!!</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
        
        <script type="text/javascript">
            //ajax form
            $(".ajaxForm").submit(function (e) {
                e.preventDefault(); // avoid to execute the actual submit of the form.
                var url = $(this).attr("action"); //"{{url('/admin/users')}}/edit"; // the script where you handle the form input.
                var id = $(this).attr("id");
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#"+id).serialize(), // serializes the form's elements.
                    success: function (data)
                    {
                        $("#modalSendData").modal(); // show response from the php script.
//                        document.location=document.URL;
                    }
                });
            });
        </script>
        
         <script src="{{url('/')}}/assets/bootstrap/Full/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/assets/bootstrap/Full/datatable/jquery.dataTables.min.js"></script>
    </body>    
</html>
