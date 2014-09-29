<?php
$html = '<span class="totalProducts">
        <span class="cart"></span>
        <div class="panel panel-default">
            <div class="panel-heading">'.__("Total products", "minishop").'</div>
            <div class="panel-body">
                <p><b>'.__('Items','minishop').' :</b> <span class="simpleCart_quantity"></span></p>
                <p><b>'.__('Total','minishop').':</b> <span class="simpleCart_total"></span></p>
                <p><b>'.__('Tax','minishop').':</b> <span class="simpleCart_tax"></span></p>
                <p><b>'.__('Final price','minishop').':</b> <span class="simpleCart_grandTotal"></span> </p>
            </div>
        </div>';
echo $html;
?>

