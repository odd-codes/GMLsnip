<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    
    <?php
        $page_title = "GMLsnip | Github";
        include "../components/header.php"
    ?>

    <body>

    <?php include "../components/nav.php" ?>

    <div class="container">
        <p class="news"><a href="/gmlsnip/docs"><strong>Looking for the API?</strong>&nbsp;Read the documentation&nbsp;&raquo;</a></p>
        <h1>GMLsnip Github Repos</h1>
            <p>This page serves as a listing where you can find all the Github repos related to the GMLsnip project. Please make sure you open issues or request features in the respective repos. This decentralized structure may change in the future, but for the time-being I've chosen to keep all aspects of this project separated from one another out of personal preference.</p>
            <p>Each repo has their own README.md and LICENSE files and may be subject to different terms.</p>

            <h2 class="question coll">GMLsnip</h2>
            <div class="coll-p">
                <p class="answer">This is the primary repo of the GMLsnip project. It consists of the website you're on right now as well as the public API.
                    <br /><br />
                <a href="https://github.com/zbanack/GMLsnip" title="GMLsnip Repo" target="_blank">Repo</a>&nbsp;&bull;&nbsp;
                <a href="https://github.com/zbanack/GMLsnip/issues" title="GMLsnip Repo Issues" target="_blank">Issues/Feature Requests</a>
                </p>
            </div>

            <h2 class="question coll">GMLsnip-Addon</h2>
                <div class="coll-p">
                <p class="answer">This is the repo associated specifically with the Google Chrome Extension and Mozilla Firefox Addon. Learn how to install this on the <a href="/gmlsnip/addon" title="Google Chrome Extension and Mozilla Firefox Addon" target="_blank">Browser Addon</a> page.
                    <br /><br />
                <a href="https://github.com/zbanack/GMLsnip-Addon" title="GMLsnip-Addon Repo" target="_blank">Repo</a>&nbsp;&bull;&nbsp;
                <a href="https://github.com/zbanack/GMLsnip-Addon/issues" title="GMLsnip-Addon Repo Issues" target="_blank">Issues/Feature Requests</a>
                </p>
            </div>

            <h2 class="question coll">gml_syntax</h2>
                <div class="coll-p">
                <p class="answer">This is the repo for the GameMaker Language parser, written in vanilla JavaScript. This codebase tokenizes GML; stylizing is outside the scope of gml_syntax. It is able to scope local, global, and resource-level variables.
                    <br /><br />
                <a href="https://github.com/zbanack/gml_syntax" title="gml_syntax Repo" target="_blank">Repo</a>&nbsp;&bull;&nbsp;
                <a href="https://github.com/zbanack/gml_syntax/issues" title="gml_syntax Repo Issues" target="_blank">Issues/Feature Requests</a>
                </p>
            </div>

            <h2 class="question coll">GameMaker Language Functions</h2>
                <div class="coll-p">
                <p class="answer">A single JSON file containing every single GameMaker 8, GameMaker: Studio 1, and GameMaker Studio 2 function. Each function contains information like its name, which versions of GameMaker it can be used in, what arguments (parameters) it takes, a link to the official YoYo Games documentation (if available), and a single-sentence description sourced from the documentation.
                <br/><br/>
                <a href="https://github.com/zbanack/GameMaker-Language-Functions" title="GameMaker-Language-Functions Repo" target="_blank">Repo</a>&nbsp;&bull;&nbsp;
                <a href="https://github.com/zbanack/GameMaker-Language-Functions/issues" title="GameMaker-Language-Functions Repo Issues" target="_blank">Issues/Feature Requests</a>
                </p>
            </div>

            <?php include "../components/footer.php" ?>
    </div>
    </body>
</html>