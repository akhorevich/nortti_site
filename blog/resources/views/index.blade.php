@extends('layouts.index')
@section('header')
    <div class="head">Nortti's Blog</div>
    <div class="nav">
    	<ul class="menu">
    		<li class="effect-2">
    			<a href="#">
    				Main
    			</a>
    		</li>
    		<li class="effect-2">
    			<a href="">
    				Articles
    			</a>
    		</li>
    		<li class="effect-2">
    			<a href="">
    				Projects
    			</a>
    		</li>
    		<li class="effect-2">
    			<a href="">
    				Contacts
    			</a>
    		</li>
    	</ul>
    </div>
@endsection
@section('content')

    Приветствую вас на своем крутом сайте!!!

@endsection
@section('footer')
Copyright &copy; {{ $date }}
@endsection
@section('icons')
<a href="https://vk.com/khorevich" class="social social-vk"></a>
<a href="https://www.facebook.com/a.khorevich" class="social social-fb"></a>
<a href="https://twitter.com/A_Khorevich" class="social social-tw"></a>
@endsection