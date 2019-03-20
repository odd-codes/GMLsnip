<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    
    <?php
        $page_title = "GMLsnip | API Docs";
        include "../components/header.php"
    ?>

    <body>

    <?php include "../components/nav.php" ?>

    <div class="container">

        <h1>GMLsnip API Docs</h1>
			<p>GMLsnip offers an easy-to-use API. This allows developers to generate GameMaker Language code snippets by means of calling a URL in their programming language of choice. The API endpoint is accessible at <a href="https://www.gmlsnip.com/api">https://www.gmlsnip.com/api</a>.</p><p><i>Please note that this service is being offered with no guarantees of reliability and may be removed without warning. If the API is abused, access to it will be revoked</i>.</p>

			<hr />

			<h2 class="docs-header">URL parameters</h2>
			<p>There are six parameters, all being optional. Note that all strings must be <strong>base64-encoded</strong>.</p>
			<p>
			<code>input_str</code> [string]. The GameMaker Language code that will be pretty-printed. For reference, this is the text that's entered into the textarea on the homepage of this website.
			</p>

			<p>
			<code>snippet_name</code> [string]. The name of the code snippet, the string of text contained in the header of the code block. If this parameter isn't provided, it defaults to the string "GML Code Snippet", as seen on the homepage.
			</p>

			<p><code>use_lines</code> [boolean]. If true, the code snippet will be generated with line numbers along the left side of the box. Otherwise, no line numbers will be rendered. If this parameter isn't provided, it defaults to true.
			</p>

			<p><code>use_docs</code> [boolean]. If true, all GameMaker Language-recognized functions (GM8.1, GMS1.4, GMS2) in the code snippet will contain a href links to their respective YoYo Games official documentation entries. Otherwise, function names will not be underlined nor clickable. The list of recognized functions comes from the project, <a href="https://github.com/zbanack/GameMaker-Language-Functions/">GameMaker Language Functions</a>. If this parameter isn't provided, it defaults to true.</p>

			<p><code>use_copy</code> [boolean]. If true, the code snippet will be generated with a .svg copy button in the upper-right hand corner, allow for easy copying of the code to the end user's clipboard. Code can still be copied by manual means (e.g. ctrl+C, right-click -> copy) even if this parameter is set to false. If this parameter isn't provided, it defaults to true.</p>

			<p><code>use_tooltips</code> [boolean]. Similar to the aforementioned <code>use_docs</code> parameter, this parameter deals with functions recognized in the GameMaker Language Functions project. If true, on-hover tooltips will show a small description of what the function does, per the official YoYo Games documentation. If this parameter isn't provided, it defaults to false.</p>

			<hr />
			<h2 class="docs-header">API response</h2>

			<p>The API will return JSON in the first paragraph, <code>&lt;p&gt;</code><code>&lt;/p&gt;</code>, tag of the document's body, <code>&lt;body&gt;</code><code>&lt;/body&gt;</code>.</p>
			<p>The JSON contains two objects:</p><ul><li><code>body</code> contains the HTML necessary to render the codeblock</li><li><coode>head</code> contains the CSS used to style the codeblock and the JavaScript required to use the clipboard functionality.</li></ul><p><strong>Note:</strong> the JSON return strings are <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/encodeURI">URI encoded</a> and must be decoded. The reason for this is because the JSON contains HTML tags which browsers attempt to render.</p>

			<?php include "../components/footer.php" ?>

		</div>
    </body>
</html>