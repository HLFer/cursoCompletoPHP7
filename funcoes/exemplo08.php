<?php

function soma(int ...$valores):string {

	return array_sum($valores);

}

echo var_dump(soma(2,2));
echo '<br>';

echo var_dump(soma(25,33));
echo '<br>';


echo var_dump(soma(2.5,1.4));
echo '<br>';

?>