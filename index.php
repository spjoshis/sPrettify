<?php
  /*! sPrettify v0.0.1 | Google Prettify Theme | sgeek.org */

  /*
  *   Author:  Gopal Joshi
  *   Website: www.sgeek.org
  *   Description: sPrettify is Syntax highlighter theme. To use this sPrettify, Include JS and CSS and add "prettyprint" class name on parent div where you want pretty highlighted code. "linenums" class is used to add line number with each line of code.
  */
?>

<!DOCTYPE html>
<html>
<head>
	<title>Syntax Highlighter</title>
	<link rel='stylesheet' id='syntax-css' href="css/styles.css" type='text/css' media='all'/> 
	<script type='text/javascript' src='js/sPrettify.js'></script>
</head>
<body>
	<h1>sPrettify</h1>
	<hr/>
    <pre class="prettyprint linenums">
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Syntax Highlighter Theme&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;?php
      error_reporting(E_ALL);
      $url = "&lt;URL&gt;";     // &lt;URL&gt; is input parameter
      $lines_array = file($url);
      $lines_string = implode('jqOfcEmail',$lines_array);
      echo "&lt;pre&gt;";
      print_r($lines_array);
      echo "&lt;/pre&gt;";
    ?&gt;
    &lt;/body&gt;
    &lt;/html&gt;
    </pre>
  </body>
</html>