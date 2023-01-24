<?php

function ob_html_compress($buf)
{
    return str_replace(array("\n", "\r", "\t"), '', $buf);
}

ob_start("ob_html_compress"); // compress head HTML 

?>
PHP or HTML impelement here...
<?php

ob_end_flush();

?>
