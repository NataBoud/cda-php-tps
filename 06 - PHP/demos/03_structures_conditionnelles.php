<?php

if(18 > 3) {
    echo "18 > 3";
}

if(18 > 19) {
    echo "Bizarre quand même";
} else if(18 > 18) {
    echo "Encore chelou";
} else {
    echo "C'est cool";
}

$role = 'visitor';

switch($role) {
    case 'user':
        echo "welcome $role";
        break;
    case 'admin':
        echo "welcome $role";
        break;
    case 'visitor':
        echo "welcome $role";
        break;
    default:
        echo "You're not welcome";
}

$result = match($role) {
    'user' => $role,
    'admin' => $role,
    'visitor' => $role
};