<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

    <meta charset="utf-8" />
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />

    <title>Новости науки</title>

    <!-- Included CSS Files (Compressed) -->
    <link rel="stylesheet" href="{{ url('stylesheets/foundation.min.css') }}">
    <link rel="stylesheet" href="{{ url('stylesheets/main.css') }}">
    <link rel="stylesheet" href="{{ url('stylesheets/app.css') }}">
    <script src="{{ url('javascripts/modernizr.foundation.js') }}"></script>
    <link rel="stylesheet" href="{{ url('fonts/ligature.css') }}">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />

    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<!-- ######################## Main Menu ######################## -->

<nav>

    <div class="twelve columns header_nav">
        <div class="row">

            <ul id="menu-header" class="nav-bar horizontal">
				<li><a href="{{ url('/') }}">Главная</a></li>
				@foreach($rubrics as $rubric)
                <li><a href="{{ url('rubrika', $rubric->rubrics) }}">{{$rubric->rubrics}}</a></li>
                @endforeach
				<li>{{$name}}</li>
				
				@if (!$name) <li><a href="{{ url('home') }}">Home</li> @endif
            </ul>
			

            <script type="text/javascript">
                //<![CDATA[
                $('ul#menu-header').nav-bar();
                //]]>
            </script>

        </div>
    </div>

</nav><!-- END main menu -->

<!-- ######################## Header (featured posts) ######################## -->

<header>


    <div class="row">

        <h1>Новости науки</h1>

</header>

<!-- ######################## Section ######################## -->

<section>

    <div class="section_main">

        <div class="row">
		<section class="eight columns">
              @yield('content')
        </section>


            <section class="four columns">
			@if (!$mode)
			@if ($admin)
                <H3>  &nbsp; </H3>
                <div class="panel">
                    <h3>Админ-панель</h3>

                    <ul class="accordion">
                        <li class="active">
                            <div class="title">
                                <a href="{{ url('add') }}"><h5>Добавить статью</h5></a>
                            </div>

                        </li>
                    </ul>
	
                </div>
			@endif
			@endif
            </section>

        </div>

    </div>

</section>


<!-- ######################## Section ######################## -->

<section>

    <div class="section_dark">
        <div class="row">

            <h2></h2>

            <div class="two columns">
                <img src="{{ url('images/thumb1.jpg') }}" alt="desc" />
            </div>

            <div class="two columns">
                <img src="{{ url('images/thumb2.jpg') }}" alt="desc" />
            </div>

            <div class="two columns">
                <img src="{{ url('images/thumb3.jpg') }}" alt="desc" />
            </div>

            <div class="two columns">
                <img src="{{ url('images/thumb4.jpg') }}" alt="desc" />
            </div>

            <div class="two columns">
                <img src="{{ url('images/thumb5.jpg') }}" alt="desc" />
            </div>

            <div class="two columns">
                <img src="{{ url('images/thumb6.jpg') }}" alt="desc" />
            </div>


        </div>
    </div>

</section>


<!-- ######################## Footer ######################## -->

<footer>

    <div class="row">

        <div class="twelve columns footer">
            <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="twitter">Twitter</a>
            <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="facebook">Facebook</a>
            <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="pinterest">Pinterest</a>
            <a href="" class="lsf-icon" style="font-size:16px" title="instagram">Instagram</a>
        </div>

    </div>

</footer>

<!-- ######################## Scripts ######################## -->

<!-- Included JS Files (Compressed) -->
<script src="javascripts/foundation.min.js" type="text/javascript"></script>
<!-- Initialize JS Plugins -->
<script src="javascripts/app.js" type="text/javascript"></script>
</body>
</html>
