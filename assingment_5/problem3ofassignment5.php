<?php

$str='I love Bangladesh, I love tiger';

$pieces=preg_split('/\s|\.|, /',$str); 

print_r(array_count_values($pieces));

?>