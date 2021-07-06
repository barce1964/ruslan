function checkName($name) {
    if (strlen($name) >= 2) {
        return true;
    }
    return false;
}

function checkEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}

function checkMsg($msg) {
    if (strlen($msg) > 0) {
        return true;
    }
    return false;
}
