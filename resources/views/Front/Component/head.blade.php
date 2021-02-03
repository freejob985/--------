    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gulf Digital</title>
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
        <!-- styles -->	
        <link rel="stylesheet" href="{{ URL('front/assets/css/plugins.css')}}" />
        <!--===============================================================================================-->
        <link rel="stylesheet" href="{{ URL('front/assets/css/style.css')}}" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!--===============================================================================================-->
        <style>
            
            .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:30px;
	left:30px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}


.testimonials-content{display:none;}

.fa, .far, .fas {
    font-family: "Font Awesome 5 Free";
}

        </style>
        @if ( Session::get('locale') =="en")
        @else
        <link rel="stylesheet" href="{{ URL('front/assets/rtl.css')}}" />
        @endif
        @stack('css')
    </head>