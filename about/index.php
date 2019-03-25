<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    
    <?php
        $page_title = "GMLsnip | About";
        include "../components/header.php"
    ?>

    <body>

    <?php include "../components/nav.php" ?>

    <div class="container">
        <h1>About GMLsnip</h1>
        <p>GMLsnip is a side project of long-time GameMaker developer <a href="https://www.zackbanack.com">Zack Banack</a>. It's a tool that allows developers to create stylized GML code snippets to embed in websites of their own. It renders GameMaker Language code snippets in browsers just as they appear in the Studio IDE. Originally created specifically for <a href="https://www.zackbanack.com">The Step Event</a>, the project's gone open source and is available to all of the GM community.</p>
        <p><strong>Notable features:</strong></p>
        <ul>
            <li>Color-coded syntax near-identical to what you'll find in GameMaker Studio 2.x.</li>
            <li>Adaptive sizing for mobile and desktop devices</li>
            <li>In-function documentation linking to help you learn GameMaker syntax</li>
            <li>Local, global, and resource-level variable scoping</li>
            <li>Clipboard copying support</li>
            <li>Macros, enums, and regions</li>
            <li>Faux resource referencing (sprite*, object*, spr_*, obj_*)</li>
        </ul>
        <p>You can view the Github repos associated with this project on the <a href="/gmlsnip/github">Repos</a> page. There's also a <a href="/gmlsnip/docs">GMLsnip API</a>!</p>
            <?php include "../components/footer.php" ?>
    </div>
    </body>
</html>