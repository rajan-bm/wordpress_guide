//good to know,

<?php
// to remove the version number of wordpress
function remove_version()
{
    return '';
}
add_filter('the_generator', 'remove_version');



?>