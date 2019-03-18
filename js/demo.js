/*!
 * == GMLsnip.com -> demo.js ==
 *
 * Used specifically for the website https://www.GMLsnip.com
 *       
 * @author    Zack Banack <https://zackbanack.com>
 *              Particular code or functions may have their own
 *              "author" tags associated with them.
 *
 * @link      https://github.com/zbanack/GMLsnip
 * @license   GNU GPLv3 <https://github.com/zbanack/GMLsnip/blob/master/LICENSE>
 *              NOTE: Unless otherwise provided with explicit written
 *              permission, this software should be distributed
 *              with visible, clickable links to any of the following:
 *                1) https://github.com/zbanack/GMLsnip
 *                2) https:/www.GMLsnip.com
 *                3) https://zackbanack.com
 *
 * @version   v1.0.0
 * @date      January 9, 2019
 */

/**
 * Calls the demo initialization script once the page has loaded.
 */
window.onload = function() {
    demo_init();
}

/**
 * Prepares the demo by performing several important tasks
 */
function demo_init() {
    // Make text input box the focused element
    // document.getElementById('gz_dev_input').focus();

    // Establish listeners that trigger the snippet generation
    init_listeners();

    // Initial snippet generation
    has_update();
}

/**
 * Trigger the listeners that, when fired, call has_update() in an attempt to generate the snippet
 */
function init_listeners() {
    listen_keypress();    
    listen_tabpress();
    collapse_js();
}

/**
 * Keyboard listener that calls for snippet generation every quarter second
 */
function listen_keypress() {
    document.onkeydown = function(e) {
        e = e || window.event;
        setTimeout(has_update, 250); // 250ms = 1/4 second
    };  
}

/**
 * Allow tab presses in textareas
 * @author  Mark <https://stackoverflow.com/a/38993445>
 */
function listen_tabpress() {
    let textareas = document.getElementsByTagName('textarea');
    if (textareas) {
        for (let i = 0; i < textareas.length; i++) {
            textareas[i].addEventListener('keydown', function(e) {
                if (e.which != 9) return;
                let start = this.selectionStart;
                let end = this.selectionEnd;
                this.value = this.value.substr(0, start) + "\t" + this.value.substr(end);
                this.selectionStart = this.selectionEnd = start + 1;
                e.preventDefault();
                return false;
            });
        }
    }
}

/**
 * Hand-off to snippet generator
 *
 * @return {Boolean}    Whether the generation function was called
 */
function has_update() {

    // User-defined tweaks
    let use_lines       = document.getElementById('gz_dev_check_lines').checked;
    let use_docs        = document.getElementById('gz_dev_check_docs').checked;
    let use_copy        = document.getElementById('gz_dev_check_copy').checked;
    let use_tooltips    = document.getElementById('gz_dev_check_tooltips').checked;

    // Check to ensure only specific elements are active to continue to the generation
    let d = document.getElementsByClassName('gz_dev_updater');
    let pass = false;

    for (i in d) {
        if (d[i] === document.activeElement) {
            pass = true;
            break;
        }
    }

    if (!pass) return false;

    // Input string and output div defined
    let input_str =  document.getElementById('gz_dev_input').value;
    let snippet_name = document.getElementById('gz_dev_input_title').value;

    // The actual snippet generation call
    let gen = gm_generate(input_str,
        snippet_name,
        use_lines,
        use_docs,
        use_copy,
        use_tooltips
    );

    console.log('here');

    // Output the CSS/JS and HTML to the respective elements
    document.getElementById('gz_dev_output_head').value = gen.return_css;
    document.getElementById('gz_dev_output_html').value = gen.return_html;

    // Update DOM
    document.getElementById('gz_dev_code_container').innerHTML = gen.return_html;

    return true;
}

/**
 * Toggle collapsable div elements for code output region
 * @author  w3schools <https://www.w3schools.com/howto/howto_js_collapsible.asp>
 */
function collapse_js() {
    let coll = document.getElementsByClassName("gz_dev_collapsible");

    for (let i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("gz_dev_active");
            let content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
}