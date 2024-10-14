<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<section id="header">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow_box" id="navbar_sticky">
        <div class="container-xl">
            <a class="text-black p-0 navbar-brand fw-bold logo_position_rel" href="{{ url('/home') }}"><img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="abc"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-0 nav_left">
                    <!--li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{ url('/') }}">Home</a>
        </li-->

                    <li class="nav-item">
                        <a class="nav-link {{ Request::segment(1) === 'about' ? 'active' : null }}" href="{{ url('/about')}}" id="ab">About </a>
                    </li>
        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" target="_self" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        How it works                        </a>
                        <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
                        <!--li><a class="dropdown-item" href="#" id="hw">How it works</a></li-->
                        <li><a class="dropdown-item" href="{{ url('/how-it-works-houses')}}" id="hw-it-hs">  How it works for houses</a></li>
                        <li><a class="dropdown-item" href="{{ url('/how-it-works-lands')}}" id="hw-it-lnd">  How it works for lands</a></li>
                        <li><a class="dropdown-item" href="{{ url('/faq')}}" id="fq"> Faq</a></li>

                        </ul>
                    </li>
                    <!--li class="nav-item">
                        <a class="nav-link" href="{{ url('/priceland')}}" id="pl">Price Land </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/pricehouse') }}" id="ph" role="button">
                            Price Houses
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/compreport')}}" id="cprp" role="button">
                            Comp Report
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/research')}}" role="button" id="rs">
                            Research
                        </a>
                    </li-->
                    <li class="nav-item">
                        <a class="nav-link {{ Request::segment(1) === 'subscription' ? 'active' : null }}" href="{{ url('/subscription')}}" role="button" id="sub">
                            Subscription
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/profile')}}" target="_self" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                        </a>
                        <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
                            <!--li><a class="dropdown-item" href="{{ url('/profile')}}" id="pf"> Profile</a></li-->
                            <!--li><a class="dropdown-item logout" href="{{ url('/api/logout')}}" id="lg"> Logout</a></li-->
                            <li><a class="dropdown-item" href="{{ url('/register')}}" id="rg"> Register</a></li>
                            <li><a class="dropdown-item" href="{{ url('/login2')}}" id="ln"> Login</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::segment(1) === 'support' ? 'active' : null }}" href="{{ url('/support')}}" role="button" id="sp">
                            Contact
                        </a>
                    </li>
                    

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown_search nav_hide" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-search"></i>
                        </a>
                        <ul class="dropdown-menu drop_2 p-3" aria-labelledby="navbarDropdown">
                            <li>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Here">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary bg_yell rounded-0 p-2 px-3 border-0" type="button">
                                            <i class="fa fa-search"></i> </button>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
                <ul class="navbar-nav mb-0 ms-auto">
                    <li class="nav-item" id="login_b">
                        <a class=" mx-3" href="{{ url('/login2') }}">
                            <svg class="me-1" data-bbox="0 0 50 50" data-type="shape" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 50 50">
                                <g>
                                    <path d="M25 48.077c-5.924 0-11.31-2.252-15.396-5.921 2.254-5.362 7.492-8.267 15.373-8.267 7.889 0 13.139 3.044 15.408 8.418-4.084 3.659-9.471 5.77-15.385 5.77m.278-35.3c4.927 0 8.611 3.812 8.611 8.878 0 5.21-3.875 9.456-8.611 9.456s-8.611-4.246-8.611-9.456c0-5.066 3.684-8.878 8.611-8.878M25 0C11.193 0 0 11.193 0 25c0 .915.056 1.816.152 2.705.032.295.091.581.133.873.085.589.173 1.176.298 1.751.073.338.169.665.256.997.135.515.273 1.027.439 1.529.114.342.243.675.37 1.01.18.476.369.945.577 1.406.149.331.308.657.472.98.225.446.463.883.714 1.313.182.312.365.619.56.922.272.423.56.832.856 1.237.207.284.41.568.629.841.325.408.671.796 1.02 1.182.22.244.432.494.662.728.405.415.833.801 1.265 1.186.173.154.329.325.507.475l.004-.011A24.886 24.886 0 0 0 25 50a24.881 24.881 0 0 0 16.069-5.861.126.126 0 0 1 .003.01c.172-.144.324-.309.49-.458.442-.392.88-.787 1.293-1.209.228-.232.437-.479.655-.72.352-.389.701-.78 1.028-1.191.218-.272.421-.556.627-.838.297-.405.587-.816.859-1.24a26.104 26.104 0 0 0 1.748-3.216c.208-.461.398-.93.579-1.406.127-.336.256-.669.369-1.012.167-.502.305-1.014.44-1.53.087-.332.183-.659.256-.996.126-.576.214-1.164.299-1.754.042-.292.101-.577.133-.872.095-.89.152-1.791.152-2.707C50 11.193 38.807 0 25 0"></path>
                                </g>
                            </svg>
                            Login 
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>

<script>
     /*$(document).ready(function() {
       var token = localStorage.getItem('user_token2');
        if (token) {
            $('#lg').show();
            $('#pf').show();
            $("#ph").show();
            $("#pl").show();
            $("#cprp").show();
            $("#rs").show();
            $('#ab').hide();
            $('#hw').hide();
            $('#sp').hide();
            $('#rg').hide();
            $('#ln').hide();
            $("#login_b").remove();

        } else {
            $("#lg").remove();
            $("#pf").remove();
            $("#ph").remove();
            $("#pl").remove();
            $("#cprp").remove();
            $("#rs").remove();
        }



    });
    /*$.ajax({
        url: '{{ url("/api/profile") }}',
        type: "GET",
        headers: {
            'Authorization': localStorage.getItem('user_token2')
        },
        success: function(data) {
            console.log(data);
            if (data.status == true) {
                console.log(data.user);
                $('.name').text(data.user.name);
                $('#name').val(data.user.name);
                $('#email').val(data.user.email);
               
                //localStorage.removeItem('user_token');
                //window.open('/login','_self');
            } else {
                /*$("#lg").hide();
                $("#ph").hide();
                $("#pl").hide();
                $("#cprp").hide();
                $("#rs").hide();*/



    //$('#lg').hide();
    /*alert(data.message);

            }
        },
        statusCode: {
            401: function() {
                //alert("401");
                $("#lg").remove();
                $("#pf").remove();
                $("#ph").remove();
                $("#pl").remove();
                $("#cprp").remove();
                $("#rs").remove();


            },
            500: function() {
                //alert("401");
                $("#lg").remove();
                $("#pf").remove();
                $("#ph").remove();
                $("#pl").remove();
                $("#cprp").remove();
                $("#rs").remove();



            }
        },
    });*/
</script>