<html>
<head>
<style>
header {
	text-align: center;
}


/* text-controls */

button {
	vertical-align: bottom;
	margin: 0 0.3125em;
	padding: 0 0.3125em;
	border: 1px solid #000;
	background-color: #fff;
	font-weight: bold;
}

button#increasetext {
	font-size: 1.50em;
}

button#resettext {
	font-size: 1.25em;
}

button#decreasetext {
	font-size: 1.125em;
}

.textcontrols {
	padding: 0.625em 0;
	background: #ccc;
}


/* content */

#content {
	margin: 3em 0;
	text-align: left;
}


/* demo container */

#container {
	width: 90%;
	margin: 0 auto;
	padding: 2%;
}

#description {
	margin-bottom: 1.25em;
	text-align: left;
}

@media all and (min-width: 700px) {
	#container {
		width: 700px;
	}
	button {
		margin: 0 0.625em;
		padding: 0 0.625em;
	}
}
</style> 
</head>
<body> 


<div id="container">
	<header>
		<h1 id="title">
	  API 
	</h1>

		<p> data has been directly fetch from sql database</p>
		 
	</header>
	<main id="content" role="main">
		<div id="description">
			<h2> Sample api get page</h2>
			<p> <a href='/fetch'> FETCH SAMPLE </a> </p> 

                  <h2> some smaple api urls </h2> 
                  <p> http://localhost/fetch?name=a&totalmarks=80&tm=low  </p> 
                  <p> http://localhost/fetch?name=ab&totalmarks=80  </p> 
                  <p> http://localhost/fetch  </p> 

                  <h2> TABLE DATA UI </h2> 
                  <p> <a href='/table'> CHECK IT </a> </p> 
		</div>
	</main>
</div>

</body>
</html> 
