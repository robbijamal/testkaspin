
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    
    <link rel="stylesheet" href="{{ url('/') }}/assets/mdm/bootstrap-material-design.min.css">
    <link href="{{ url('/') }}/assets/mdm/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/mdm/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/mdm/iofrm-theme4.css">
</head>
<body class="overflow-hidden">

<div class="form-body">
    {{--<img src="https://id.mdmedia.id/assets/ioform/img/devcip/accent.png" alt="" class="alt2"/>--}}
    <div class="row relative">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                {{--<img src="https://id.mdmedia.id/assets/ioform/img/devcip/main.svg" alt="" class="img-symbol img-fluid">--}}
                <div class="supportby" style="color:red;">
                    {{--<img src="{{ url('/') }}/assets/mdm/Logo-MD-gray-m.png" alt="" height="30">
                    <img src="{{ url('/') }}/assets/mdm/ypads-m.png" alt="" height="30">
                    <img src="{{ url('/') }}/assets/mdm/adsqoo-m.png" alt="" height="30">--}}
                </div>
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content relative">
                <div class="form-items">
                @if (session('status'))
                <div style="color: #3c763d;background-color: #cce5ff; border-color: #d6e9c6;padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;">
                    {{ session('status') }}
                </div>
                   
                       
                   
                @endif
                    <h3 class="mb-3">One step ahead to accesss your dashboard.</h3>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="bmd-label-floating">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" value="admin@gmail.com">
                        </div>
                        <div class="form-group relative">
                            <label for="password" class="bmd-label-floating">Password</label>
                            <input type="password" name="password" class="form-control" id="password" value="test12345">
                            <i class="fa fa-eye showpass"></i>
                        </div>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">Login</button>
                        </div>
                        
                    </form>
                   
                    
                    <div class="other-links">
                        <small>Powered by: Ahmad Robbi AL Jamal</small>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="{{ url('/') }}/assets/mdm/jquery.min.js"></script>
<script src="{{ url('/') }}/assets/mdm/popper.min.js"></script>
<script src="{{ url('/') }}/assets/mdm/bootstrap.min.js"></script>
<script src="{{ url('/') }}/assets/mdm/main.js"></script>
<script src="{{ url('/') }}/assets/mdm/bootstrap-material-design.js"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<script>
    $('.showpass').click(function() {
        if( $(this).hasClass('fa-eye') ) {
            $('#password').prop('type', 'text');
        } else {
            $('#password').prop('type', 'password');
        }

        $(this).toggleClass('fa-eye').toggleClass('fa-eye-slash');//.addClass('')
    })
</script>
</body>
</html>
