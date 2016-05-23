<html>
<head>
    <meta charset='utf-8'/>
    <link rel="stylesheet" type="text/css" href={{ URL::asset('css/style.css') }} />
    <link rel="stylesheet" type="text/css" href={{ URL::asset('css/links.css') }} />
    <title>Мой сайт</title>
</head>
<body>
<div id="header">
   @yield('header')
</div>
<div id="content">
    @yield('content')
</div>
<div id="footer">
<div class="foot">
    @yield('footer')
    </div>
<div class="icons">
	@yield('icons')
</div>
</div>
</body>
</html>