<html>
<head>
	<title>Newsletter Previewer</title>
	<style type="text/css">
		body {
			text-align: center;
			font-family: Helvetica, sans-serif;
		}
		select {
			font-size: 16px;
		}
		iframe {
			border: 1px solid black;
			margin-top: 20px;
			width: 715px;
			height: 700px;
			transition: 1s ease all;
		}
		h1 {
			font-weight: normal;
			margin-top: 20px;
		}
		textarea {
			width: 500px;
			height: 700px;
		}
	</style>
	<script src="jquery.js"></script>
	<script>
	$(document).ready(function(){
		$('#selector').change(function(){
			var target = $(this).val();
			$('iframe').attr('src',target);
		})
		$('#mobile').click(function(){
			$('iframe').css('width', '400px');
		})
		$('#desktop').click(function(){
			$('iframe').css('width', '1024px');
		})
	});

	</script>
</head>
<body>
	<h1>E-mail Previewer</h1>
	<select id="selector">
		<option value="">Please Choose...</option>

		<!-- MANUALLY ADD TEMPLATES AS OPTIONS BELOW -->
		<option value="template.php">Template #1</option>

	</select>

	<button id="mobile">Mobile</button>
	<button id="desktop">Desktop</button>

	<br>

	<iframe src="template.php" id="editor" frameborder="0"></iframe>

	<textarea id="html" onfocus="editor.rte();" onblur="editor.source();"></textarea>

	<script>
	<!--
	//<![CDATA[
	var editor = function() {
	    var e = document.getElementById("editor").contentWindow;
	    e.document.designMode = "on";

	    var a, b;
	    return {
	        run:function(c, s) {
	            e.document.execCommand(c, false, s);
	        },
	        source:function() {
	            clearInterval(b);
	            a = setInterval(function(){document.getElementById("html").value = e.document.body.outerHTML;}, 200);
	        },
	        rte:function() {
	            clearInterval(a);
	            b = setInterval(function(){e.document.body.outerHTML = document.getElementById("html").value;}, 200);
	        }
	    };
	}();
	editor.source();
	//]]>
	-->
	</script>

</body>

</html>
