<?php 

$string = 'Lorem, ipsum dolor. sit amet consectetur . adipisicing elit . Repellendus, labore rem! Quas. consectetur aspernatur quo hic . temporibus maxime explicabo! . Repellat labore perferendis placeat . ducimus non, sequi illum recusandae . earum veniam?';

$string = str_replace('.','<p>',$string);

echo "$string";
?>