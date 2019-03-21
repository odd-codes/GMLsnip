<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    
    <?php
        $page_title = "GML syntax highlighter & GameMaker code snippet creator";
        include "components/header.php"
    ?>

    <body>

    <?php include "components/share.php" ?>
    <?php include "components/nav.php" ?>

    <div class="container">
    <h1>GameMaker Language pretty-printing</h1>
    <p>Use GMLsnip to create stylized GML code snippets for your own websites or blog posts, like <a href="https://www.zackbanack.com/blog/gamemaker-studio-2-tips-and-tricks" target="_blank">20 GameMaker tips and tricks</a>.</p>
    <div class="row">
        <div class="eight columns">
            <h2 class="docs-header">1. Paste or write your GML below</h2>
            <textarea id="gz_dev_input" maxlength="1024" class="u-full-width gz_dev_scroll gz_dev_updater"></textarea>
        </div>

      <div class="four columns u-full-width">
        <h2 class="docs-header">2. Customizations</h2>
        <input type="text" id="gz_dev_input_title" maxlength="50" value="GML Code Snippet" class='u-full-width gz_dev_updater'>
        <label>
            <input class="gz_dev_updater" type="checkbox" checked="checked" id="gz_dev_check_lines" onclick="has_update();">
            <span>Show line numbers</span>
        </label>

        <label>
            <input class="gz_dev_updater" type="checkbox" checked="checked" id="gz_dev_check_copy" onclick="has_update();">
            <span>Show clipboard button</span>
        </label>

        <label>
            <input class="gz_dev_updater" type="checkbox" checked="checked" id="gz_dev_check_docs" onclick="has_update();">
            <span>YYG doc function links</span>
        </label>

        <label>
            <input class="gz_dev_updater" type="checkbox" id="gz_dev_check_tooltips" onclick="has_update();">
            <span>Function description tooltips</span>
        </label>
      </div>

    </div>

    <noscript>
        <div id="jsless">
            <p><strong>Uh oh!</strong>&nbsp;JavaScript is required to create code snippets, but not render them. Please enable JavaScript or update your browser to use this website.</p>
        </div>
    </noscript>

    <div class="row u-full-width">
        <br />
        <div id='gz_dev_code_container' class='gz_cls_snippet'>
            <div class="waiter"></div>
        </div>
    </div>

    <div class="row u-full-width">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- GMLsnip -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-7699907162613938"
            data-ad-slot="1795109857"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

    <script>
        function clip(id) {
            let textarea = document.getElementById(id);
            textarea.select();
            document.execCommand("copy");
        }
    </script>

    <div class="row u-full-width">
        <h2 class="docs-header">3. CSS and JavaScript output</h2>
        <p>Copy the code below and paste it between your webpage's <code>&lt;head&gt;</code> <code>&lt;/head&gt;</code> tags. This code handles the styling for all of the GML snippets on a given page, so you only need it once per page.</p>
    </div>

    <div class="row u-full-width">
        <div class="nine columns">
            <textarea id='gz_dev_output_head' readonly class="codeout u-full-width"></textarea>
        </div>
        <div class="three columns">
            <button class="button" onclick="clip('gz_dev_output_head')"><i class="far fa-clipboard"></i>&nbsp;&nbsp;Copy</button>
        </div>
    </div>

    <div class="row u-full-width">
        <h2 class="docs-header">4. HTML output</h2>
        <p>Copy the code below and paste it where you desire between your webpage's <code>&lt;body&gt;</code> <code>&lt;/body&gt;</code> tags. This code will create the code snippet seen at the top of the webpage.</p>
    </div>

    <div class="row u-full-width">
        <div class="nine columns">
            <textarea id='gz_dev_output_html' readonly class="codeout u-full-width"></textarea>
        </div>
        <div class="three columns">
            <button class="button" onclick="clip('gz_dev_output_html')"><i class="far fa-clipboard"></i>&nbsp;&nbsp;Copy</button>
        </div>
    </div>

    <hr />

    <div class="row u-full-width" style="text-align:center;">
        <a class="button" href="/faq" title="Frequently Asked Questions">Help/FAQ</a>
        <a class="button" href="/addon" title="Google Chrome Extension and Mozilla Firefox Addon">Addon</a>
        <a class="button" href="/docs" title="GMLsnip API">API</a>
        <a class="button" href="/github" title="GMLsnip Github">Github</a>
        <a class="button button-primary" href="/support" title="Support by donating">Support</a>
    </div>

    <?php include "components/footer.php" ?>

</div>


        <script>
            let str = '/// add_commas(integer, separation)\n';
                str += 'var str = string(argument0);\n';
                str += 'var sep = argument1;\n';
                str += 'for (var i = string_length(str) - (sep - 1); i > 1; i -= sep) {\n';
                str += '\tstr = string_insert(",", str, i);\n';
                str += '}\n';
                str += 'return str;'

            let typ_i = 0;
            let spd = 8;

            function auto_type() {
              if (typ_i < str.length) {
                document.getElementById("gz_dev_input").value += str.charAt(typ_i);
                typ_i++;
                if (typ_i%30==0) has_update();
                setTimeout(auto_type, spd);
              }
              else {
                has_update();
              }
            }

            auto_type();
        </script>

</body>
</html>