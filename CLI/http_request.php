<?php
/**
 * Write a PHP script to report the total download size of any URL. You may not
 * use any 3rd-party code that performs the entire task described below.
 *
 * No HTML interface is necessary for this exercise; you can write this as a
 * command-line script that accepts the URL as an argument.
 *
 * For a single-file resource such as an image or SWF, the script would simply
 * report on the total size of the document.
 *
 * For a complex resource such as an HTML document, the script would need to
 * parse it to find references to embedded, included resources: javascript files
 * , CSS files, iframes, etc.
 *
 * The goal of this exercise is to output the following information for a given
 * URL:
 *
 * - total number of HTTP requests
 * - total download size for all requests
 */

$URL = $argv[1];

