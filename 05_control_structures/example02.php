<?php
/**
 * we can get boolean values by comparing one value to another
 * we can also get it as the return type from function empty(), is_array()
 * For comparision we use comparision operators, these will always give true or false
 * $a==$b if the value a and b are having same value
 * $a===$b if the value of a and b are same, also datatype should also be same
 * $a!=$b if a and b are of different values then true
 * $a!==$b if a and b are of different values and also different type then true or else false
 * $a<>$b if a and b are of different values
 * $a<$b if a is less than b
 * $a<=$b if a is less than or equal to b
 * $a>$b if a is greater then b
 * $a>=$b is a is greater than or equal to b
 * 
 */
$a = 5;
$b = 7;
$c="5";
$d = 5;
$e=6;
?>
<table border="1" cellpadding="2" cellspacing="5" >
    <tr>
        <th>Operator</th>
        <th>Result a:<?=$a;?>, b:<?=$b?>, c:<?=$c;?>, d:<?=$d;?></th>
    </tr>
    <tr>
        <th>==</th>
        <td>
            <?php var_dump($a == $b); ?>
            <?php var_dump($a == $d); ?>
            <?php var_dump($a == $c); ?>
        </td>
    </tr>
    <tr>
        <th>===</th>
        <td>
            <?php var_dump($a === $b); ?>
            <?php var_dump($a === $d); ?>
            <?php var_dump($a === $c); ?>
        </td>
    </tr>
    <tr>
        <th>!=</th>
        <td>
            <?php var_dump($a != $b); ?>
            <?php var_dump($a != $d); ?>
            <?php var_dump($a != $c); ?>
        </td>
    </tr>
    <tr>
        <th>!==</th>
        <td>
            <?php var_dump($a !== $b); ?>
            <?php var_dump($a !== $d); ?>
            <?php var_dump($a !== $c); ?>
        </td>
    </tr>
    <tr>
        <th><></th>
        <td>
            <?php var_dump($a<>$b); ?>
            <?php var_dump($a<>$c); ?>
            <?php var_dump($a<>$d); ?>
        </td>
    </tr>
    <tr>
        <th><</th>
        <td>
            <?php var_dump($a<$b); ?>
            <?php var_dump($a<$c); ?>
            <?php var_dump($a<$d); ?>
            <?php var_dump($a<$e); ?>
        </td>
    </tr>
    <tr>
        <th><=</th>
        <td>
            <?php var_dump($a<=$b); ?>
            <?php var_dump($a<=$c); ?>
            <?php var_dump($a<=$d); ?>
            <?php var_dump($a<=$e); ?>
        </td>
    </tr>
    <tr>
        <th>></th>
        <td>
            <?php var_dump($a>$b); ?>
            <?php var_dump($a>$c); ?>
            <?php var_dump($a>$d); ?>
            <?php var_dump($a>$e); ?>
        </td>
    </tr>
    <tr>
        <th>>=</th>
        <td>
            <?php var_dump($a>=$b); ?>
            <?php var_dump($a>=$c); ?>
            <?php var_dump($a>=$d); ?>
            <?php var_dump($a>=$e); ?>
        </td>
    </tr>
</table>
