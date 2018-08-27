
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
	

</head>
<body>
<header id="site-header" role="banner">
	<div class="container clear">
		<div class="site-branding">
			<h1 id="logo" class="image-logo" itemprop="headline">
				<a href="https://demo.mythemeshop.com/ribbon/" class="custom-logo-link" rel="home" itemprop="url"><img width="185" height="44" src="https://demo.mythemeshop.com/ribbon/files/2016/07/cropped-logo.png" class="custom-logo" alt="Ribbon" itemprop="logo"></a>
			</h1>
			<!-- END #logo -->
		</div><!-- .site-branding -->
		<div id="text-5" class="widget-header">
			<div class="textwidget"><img src="">
			</div>
		</div>
	</div>
	<div class="primary-navigation">
		<a href="#" id="pull" class="toggle-mobile-menu">Menu</a>
			<div class="container clear">
				<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
					<ul id="menu-navigation" class="menu clearfix toggle-menu">
						<li id="menu-item-1305" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1305"><a href="/home">Home</a>
						</li>
						<li id="menu-item-1333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1333"><a href="{{route('register')}}">Registration</a></li>
						<!-- <li id="menu-item-1334" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1334"><a href="#">About</a></li> -->
						<li id="menu-item-1286" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1286"><a href="/login">Login</a></li>
						<li id="menu-item-1285" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1285"><a href="/login/logout">Logout</a></li>
					</ul>
					<div id="mobile-menu-overlay" style="display: none;"></div>
				</nav><!-- #site-navigation -->
			</div>
			<div id="mobile-menu-overlay"></div></div>
</header>

	@yield('content')

	<aside class="sidebar c-4-12">
		<div id="sidebars" class="sidebar">
			<div class="sidebar_list">
				<div id="search-3" class="widget widget_search">
		<form method="post" id="searchform" class="search-form" action="/home" _lpchecked="1">
			<fieldset>
					<input type="text" name="search" id="s" placeholder="Search this site..." >
					<input type="submit" value="Search">
			</fieldset>
		</form>
	</div>
	<div id="recent-posts-3" class="widget widget_recent_entries">
		<h3 class="widget-title">Recent Posts</h3>
		<ul>
			@foreach($postlist as $i=>$post)
			  @if($i> 3)
				@break
			  @endif
			<li>
				<a href="{{route('post.detail', ['id'=> $post->post_id])}}">{{$post->post_title}}</a>
			</li>
			@endforeach
		</ul>
	</div>
	<div id="text-2" class="widget widget_text"><h3 class="widget-title">Lorem ipsum</h3>			<div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada, nibh quis egestas pellentesque, dui neque sagittis nisl, eget malesuada nunc felis sed augue. Aenean tempor nibh sed diam elementum sollicitudin quis in metus. Praesent tincidunt</div>
			</div>		</div>
		</div><!--sidebars-->
	</aside>
</div>

</body>
</html>