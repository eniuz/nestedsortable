
<!doctype html>
<!-- =================================================================================================================== -->
<html lang="en">

<!-- =================================================================================================================== -->
<head>
	<meta charset="utf-8">

	<title>PLT Mega Menu</title>
	<meta name="description" content="Demo page for menu builder">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" type="text/css"/>
	<link rel="stylesheet" href="css/main.css" type="text/css"/>
	
<body>

<header>
	<h1>nestedSortable jQuery Plugin</h1>
	<h2>2.0</h2>
</header>

<section>
	<p>
		This is the demo page for the nestedSortable jQuery plugin.
	<p>
		<strong>Follow the development, read the docs and download the latest version directly from the 
		<a href="https://github.com/mjsarfatti/nestedSortable">GitHub page</a>.</strong>
	</p>
</section> <!-- END section -->

<section id="demo">
	<ol class="sortable">
		<li id="list_1"><div><span class="disclose"><span></span></span>Item 1</div>
			<ol>
				<li id="list_2"><div><span class="disclose"><span></span></span>Sub Item 1.1</div>
					<ol>
						<li id="list_3"><div><span class="disclose"><span></span></span>Sub Item 1.2</div>
					</ol>
			</ol>
		<li id="list_4"><div><span class="disclose"><span></span></span>Item 2</div>
		<li id="list_5"><div><span class="disclose"><span></span></span>Item 3</div>
			<ol>
				<li id="list_6" class="mjs-nestedSortable-no-nesting"><div><span class="disclose"><span></span></span>Sub Item 3.1 (no nesting)</div>
				<li id="list_7"><div><span class="disclose"><span></span></span>Sub Item 3.2</div>
					<ol>
						<li id="list_8"><div><span class="disclose"><span></span></span>Sub Item 3.2.1</div>
					</ol>
			</ol>
		<li id="list_9"><div><span class="disclose"><span></span></span>Item 4</div>
		<li id="list_10"><div><span class="disclose"><span></span></span>Item 5</div>
	</ol>

	<h3>Try the custom methods:</h3>

	<p><br />
		<input type="submit" name="serialize" id="serialize" value="Serialize" />
	<pre id="serializeOutput"></pre>

	<p>
		<input type="submit" name="toArray" id="toArray" value="To array" />
	<pre id="toArrayOutput"></pre>

	<p>
		<input type="submit" name="toHierarchy" id="toHierarchy" value="To hierarchy" />
	<pre id="toHierarchyOutput"></pre>

<script type="text/javascript" src="js/vendor/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/vendor/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/vendor/jquery.mjs.nestedSortable.js"></script>
<script type="text/javascript" src="js/plt.menubuilder.0.0.1.js"></script>
</body>
</html>