<?php

extract(unserialize(file_get_contents('datas.txt')));

ob_start();
?>

<table>
    <tr>
        <td>Bonsoir</td>
    </tr>
</table>

<?php 
$content = ob_get_clean();
require('html2pdf')
