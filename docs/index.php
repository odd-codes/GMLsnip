<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    <head>
        <meta charset="utf-8" />
        <title>GMLsnip | API Docs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Dependency-free GameMaker Language syntax highlighter, code pretty-printer, and docs-linker for your website, blog.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href='https://fonts.googleapis.com/css?family=Raleway:30,300,600' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">

        <link rel="icon" type="image/png" href="../img/favicon.png">

        <style>

        .container {
            padding-top:8rem;
        }

        .docs-header {
            margin-top:4rem;
            text-transform: uppercase;
            font-size: 1.4rem;
            letter-spacing: .08rem;
            font-weight: 600;
        }

        body {
            border-left:4px solid #25a083;
        }
        </style>
    </head>

    <body>

<?php include "../php/nav.php" ?>

    <div class="container">

        <h1>GMLsnip API Docs</h1>
			<p>GMLsnip offers an easy-to-use API. This allows developers to generate GameMaker Language code snippets by means of calling a URL. The API endpoint is accessible at <a href="https://www.gmlsnip.com/api">https://www.gmlsnip.com/api</a>. There are six optional parameters.</p>

			<hr />

			<h2 class="docs-header">URL parameters</h2>
			<p>There are six parameters, all being optional. <strong>Note</strong> all string parameters must contain base64-encoded strings.</p>
			<p>
			<code>input_str</code> is the GML string of text that you want to pretty-print. This must be base64-encoded.
			</p>

			<p>
			<code>snippet_name</code> is the string name of the code snippet. If this parameter isn't provided, it defaults to the string "GML Code Snippet". This must be base64-encoded.
			</p>

			<p><code>use_lines</code> is a boolean. If true, a code snippet will be generated with line numbers along the left side of the box. If false, no line numbers will be rendered.</p>

			<p><code>use_docs</code> is a boolean. If true, GameMaker-recognized functions will contain a href links to their respective YoYo Games official documentation pages. The list of recognized functions comes from a smaller project of mine, <a href="https://github.com/zbanack/GameMaker-Language-Functions/">GameMaker Language Functions</a>.</p>

			<p><code>use_copy</code> is a boolean. If true, the code snippet will be generated with a copy button in the upper-right hand corner, allow for easy copying of the code to the end user's clipboard. Please note that code can still be copied manually even when the copy button is disabled by setting this parameter to false.</p>

			<p><code>use_tooltips</code> is a boolean. Similar to the aforementioned use_docs parameter, this parameter deals with functions recognized in the GameMaker Language Functions project. If true, on-hover tooltips will show a small description of what the function does, per the official YoYo Games documentation.</p>

			<h2 class="docs-header">API response</h2>
			<p>The API will return JSON in the paragraph of the document's body. The JSON contains two objects: "body" and "head". "body" contains the HTML necessary to render the codeblock. "head" contains the CSS used to style the codeblock and the JavaScript required to use the clipboard functionality. Please note that the JSON return data is <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/encodeURI">URI encoded</a> and must be decoded. The reason for this is because the JSON contains HTML tags which browsers attempt to render.</p>
		</div>
    </body>
</html>