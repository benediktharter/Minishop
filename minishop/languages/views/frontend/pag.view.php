<?php
    $pag = Request::get('pg');
    // Show first page
    $pagination = '<ul class="pagination">
                    <li><a href="?pg='.$lpag.'"> << </a></li>';
                    for ($i = $lpag; $i <= $rpag; $i++) {
                        if($i == $pag){$pagination .=  '<li class="active"><a href="?pg=' .$i. '">' . $i . '</a></li>';}
                        else{$pagination .=  '<li><a href="?pg=' .$i. '">' . $i . '</a></li>';}
                    }
    // Show last page
    $pagination .=  '<li><a href="?pg=' .$rpag. '"> >> </a></li>
                </ul>';
    echo $pagination;
?>
