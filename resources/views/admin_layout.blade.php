<!DOCTYPE html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
<meta name="csrf-token" content="{{ csrf_token() }}">


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>

<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet"/>

<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css"/>
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet"> 
<link rel="stylesheet" href="{{ asset('css/morris.css') }}" type="text/css"/>

<link rel="stylesheet" href="{{ asset('css/monthly.css') }}">
<link href="{{ asset('css/sanpham.css') }}" rel="stylesheet">
<link href="{{ asset('css/sanpham2.css') }}" rel="stylesheet">
<script src="{{ asset('js/jquery2.0.3.min.js') }}"></script>
<script src="{{ asset('js/raphael-min.js') }}"></script>
<script src="{{ asset('js/morris.js') }}"></script>

<link href="{{ asset('css/sanpham.css') }}" rel="stylesheet">
<link href="{{ asset('css/sanpham2.css') }}" rel="stylesheet">
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{ URL::to('/admin') }}" class="logo">
        Admin
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
      
        <li class="nav-item dropdown" style="font-weight:bold"> 
            
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a href="/userInfo/{{ Auth::user()->id}}" class="dropdown-item">Th??ng tin c?? nh??n</a>      
                @if(Auth::user()->role == 'admin')
                <a href="/product" class="dropdown-item">Trang s???n ph???m</a>   
                @endif                         
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('????ng xu???t') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
      
       
    </ul> 
   
</div>
</header>

<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{ URL::to('/admin') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>T???ng quan</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="/userShow">
                        <i class="fa fa-book"></i>
                        <span>Danh s??ch ng?????i d??ng</span>
                    </a>
                   
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Danh s??ch s???n ph???m</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{ URL::to('/add-category-product') }}">Th??m danh m???c s???n ph???m</a></li>
						<li><a href="{{ URL::to('/all-category-product') }}">Li???t k?? danh m???c s???n ph???m</a></li>
                    </ul>
                </li>

				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Th????ng hi???u s???n ph???m</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{ URL::to('/add-brand-product') }}">Th??m th????ng hi???u s???n ph???m</a></li>
						<li><a href="{{ URL::to('/all-brand-product') }}">Li???t k?? th????ng hi???u s???n ph???m</a></li>
                    </ul>
                </li>

				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>S???n ph???m</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{ URL::to('/add-product') }}">Th??m s???n ph???m</a></li>
						<li><a href="{{ URL::to('/all-product') }}">Li???t k?? s???n ph???m</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Th??ng s??? k??? thu???t s???n ph???m </span>
                    </a>
                    <ul class="sub">
					
						<li><a href="{{ URL::to('/all-desc') }}">Li???t k?? th??ng s??? k??? thu???t s???n ph???m</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="/admin-orders/all">
                        <i class="fa fa-book"></i>
                        <span>Qu???n l?? ????n h??ng</span>
                    </a>
                   
                </li>

                <li class="sub-menu">
                    <a href="/admin-comment-ratings/all">
                        <i class="fa fa-book"></i>
                        <span>Qu???n l?? ????nh gi?? & b??nh lu???n</span>
                    </a>
                   
                </li>
               
            </ul>            
        </div>
       
    </div>
</aside>

<section id="main-content">
	<section class="wrapper">
		@yield('admin_content')
</section>

</section>

</section>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('js/lightgallery-all.min.js') }}"></script>
<script src="{{ asset('js/lightslider.js') }}"></script>
<script src="{{ asset('js/prettify.js') }}"></script>
<script >
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
</script>

<script type="text/javascript">
    $(document).ready(function(){
        load_gallery();

        function load_gallery(){
           var pro_id = $('.pro_id').val();
           var _token = $('input[name="_token"]').val();
      
        $.ajax({
            url:"{{ url('/select-gallery') }}",
            method: "POST",
            data:{pro_id:pro_id,_token:_token},
            success:function(data){
                $('#gallery_load').html(data);
            }
        });
    }
        $('#file').change(function(){
            var error = '';
            var files = $('#file')[0].files;

            if(files.length>3){
                error+='<p> B???n ch???n t???i ??a ch??? ???????c 3 ???nh </p>';
            }else if(files.length==''){
                error+='<p> B???n kh??ng ???????c b??? tr???ng </p>';
            } else if(files.size > 2000000){
                error+='<p> file ???nh kh??ng ???????c l???n h??n 2GB </p>';
            }

            if (error==''){
                
            } else {
                $('#file').val('');
                $('#error_gallery').html('<span class="text-danger">'+error+'</span>');
                return false;
            }
        });

        $(document).on('blur','.edit_gal_name',function(){
            var gal_id = $(this).data('gal_id');
            var gal_text = $(this).text();
            var _token = $('input[name="_token"]').val();
            $.ajax({
            url:"{{ url('/update-gallery-name') }}",
            method: "POST",
            data:{gal_id:gal_id,gal_text:gal_text,_token:_token},
            success:function(data){
                load_gallery();
                $('#error_gallery').html('<span class="text-danger">C???p nh???t t??n h??nh ???nh th??nh c??ng</span>');
            }
        });
        });

        $(document).on('click','.delete-gallery',function(){
            var gal_id = $(this).data('gal_id');
            var _token = $('input[name="_token"]').val();

            if(confirm('B???n c?? mu???n xo?? h??nh n???y n??y kh??ng ?')){
            $.ajax({
            url:"{{ url('/delete-gallery') }}",
            method: "POST",
            data:{gal_id:gal_id,_token:_token},
            success:function(data){
                load_gallery();
                $('#error_gallery').html('<span class="text-danger"> Xo?? h??nh ???nh th??nh c??ng</span>');
            }
        });
         }
        });

        $(document).on('change','.file_image',function(){
            var gal_id = $(this).data('gal_id');
            var image = document.getElementById('file-'+gal_id).files[0];
            var form_data = new FormData();

            form_data.append("file",document.getElementById('file-'+gal_id).files[0]);
            form_data.append("gal_id",gal_id);

            
            $.ajax({
            url:"{{ url('/update-gallery') }}",
            method: "POST",
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            },
            data:form_data,
            
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){
                load_gallery();
                $('#error_gallery').html('<span class="text-danger"> C???p nh???t h??nh ???nh th??nh c??ng</span>');
            }
        });
         
        });
    });
</script>
<script src="{{ asset('js/jquery.scrollTo.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/monthly.js') }}"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>

</body>
</html>
