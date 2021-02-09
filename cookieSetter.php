<?php
function pageVisitedCookie()
{
    if (!isset($_COOKIE["page_version"])) {
        header('set-cookie: ' . rawurlencode('page_version') . '=' . rawurlencode('') . '; max-age=31536000', false);
    }
}

//initiate this function on any page to set the cookie "page_version" with empty value.
pageVisitedCookie();