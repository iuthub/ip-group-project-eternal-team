@extends('layouts.master')

@section('content')
<div class="productBox">
	<h1>Something 1<span>(Additional info)</span></h1>
	<img src="images/1.jpg" alt="image" />
	<div class="productInfo">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<h3>$17</h3>
		<div class="purchaseButton"><a href="">Purchase</a></div>
		<div class="infoButton"><a href="subpage.html">Info</a></div>
	</div>
</div>

<div class="productBox">
	<h1>Something 2<span>(Additional info)</span></h1>
	<img src="images/2.jpg" alt="image" />
	<div class="productInfo">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<h3>$6</h3>
		<div class="purchaseButton"><a href="">Purchase</a></div>
		<div class="infoButton"><a href="subpage.html">Info</a></div>
	</div>
</div>
@endsection
