<?php

$sentence = "PHP is a pwerful language";
$word = "PHP";

var_dump(
    str_contains($sentence, $word) // bool
);

var_dump(
    str_ends_with($sentence, $word) // bool
);

var_dump(
    str_starts_with($sentence, $word) // bool
);