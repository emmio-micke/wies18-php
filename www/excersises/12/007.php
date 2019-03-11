<?php

$pass = "123";

$salt_site = "rfgfojnsklmnsioujnsdlksklmösdfgmklgdfsgdmkl";
$salt_user = "hvhud,jdsjkhsadnmdshoujknlvdsjsdjkln";

$pass_to_save = kryptera($pass . $salt);

function passwordCorrect($var) {'
    // Kolla om lösenordets hash stämmer med sparade hashet
}

passwordCorrect('a'); //false
passwordCorrect('b'); //false
// osv

passwordCorrect('aa'); //false
passwordCorrect('ab'); //false

a-z, A-Z, 0-9, %$




