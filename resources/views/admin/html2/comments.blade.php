@extends('admin')

@section('main-content')
<style>
h4 {
  border: 1px solid;
  background-color:#ff6347;
}
/* bentuk border */
.w3-example {
  padding: 8px 20px;
  margin: 24px -20px;
  box-shadow: none !important;
}
.w3-example {
  background-color: #E7E9EB;
  border-radius: 5px;
  padding: 0.01em 16px;
  margin: 20px 0;
  box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12) !important;
}
.w3-code {
  width: auto;
  background-color: #fff;
  color: #000;
  padding: 8px 12px;
  border-left: 4px solid #4CAF50;
  word-wrap: break-word;
}	
.w3-btn:hover, .w3-btn:active, .w3-example a:focus, .nextprev a:focus {
  box-shadow: none;
  background-color: #059862 !important;
}
.w3-btn, .w3-btn:link, .w3-btn:visited {
  color: #FFFFFF;
  background-color: #4CAF50;
}
.w3-example .w3-btn, .w3-example .ws-btn {
  background-color: #04AA6D !important;
  border-radius: 5px;
  font-size: 17px;
  font-family: 'Source Sans Pro', sans-serif;
  padding: 6px 18px;
}
.w3-margin-bottom {
  margin-bottom: 16px !important;
}
</style>
<aside class='right-side'>
<!-- Content Header (Page header) -->
<section class='content-header'>
<h1>Tutorial HTML</h1>
</section>

		<!-- Main content -->
		<section class='content'>
		<!-- Small boxes (Stat box) -->
			<div class='row'>
			</div><!-- /.row -->
			<div class='box box-primary'>
				<div class='box-header'>
					<i class='fa fa-th'></i>
					<h3 class='box-title'>Universitas Bhayangkara Jakarta Raya</h3>
				</div>
				<div class='box-body border-radius-none'>	
				<h1>HTML <span class="color_h1">Comments</span></h1>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="html_comments.asp">&#10094; Previous</a>
<a class="w3-right w3-btn" href="html_colors_rgb.asp">Next &#10095;</a>
</div>
<hr>
<p class="intro">HTML comments are not displayed in the browser, but they can help document your HTML source code.</p>
<hr>

<h2>HTML Comments Tag</h2>
<p>You can add comments to your HTML source by using the following syntax:</p>
<!-- Write your comments here -->

<h2>Add Comments</h2>
<p>With comments you can place notifications and reminders in your HTML code:</p>
<!-- This is a comment -->
<p>This is a paragraph.</p>
<!-- Remember to add more information here -->

<h2>Hide Content</h2>
<p>Comments can be used to hide content. Which can be helpful if you hide content temporarily:</p>
<p>This is a paragraph.</p>
<!-- <p>This is another paragraph </p> -->
<p>This is a paragraph too.</p>

<p>You can also hide more than one line, everything between the <!-- and the --> will be hidden from the display.</p>
<p>This is a paragraph.</p>
<!--
<p>Look at this cool image:</p>
<img border="0" src="pic_trulli.jpg" alt="Trulli">
-->
<p>This is a paragraph too.</p>

<!-- /.row (main row) -->
			</section><!-- /.END MAIN CONTEN -->
	</aside>           
    <!-- /.Isi Content -->


</div>
@endsection