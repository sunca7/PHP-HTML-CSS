#!/usr/bin/php
<?PHP

print("Enter a number: ");
$f = fgets(STDIN);
$t = rtrim($f, "\r\n");
while ($f != NULL)
{
    if (is_numeric($t)) {
        if ($t % 2 == 0){
            print("The number$t is even\n");
        }
        if ($t % 2 == 1) {
            print("The number$t is odd\n");
        }
    }
    else {
        print("'$t' is not a number\n");
    }
    print("Enter a number: ");
    $f = fgets(STDIN);
    $t = rtrim($f, "\r\n");
}

if ($f == NULL)
    return ;
?>