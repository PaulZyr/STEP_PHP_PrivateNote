<?php

require_once CONTROLLERS_DIR.'HeaderController.php';

$action = 'input';

if (isset($_GET['action'])) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

switch ($action) {
    case 'handle':
        require_once CONTROLLERS_DIR.'HandleController.php';
        break;
    case 'ready':
        require_once CONTROLLERS_DIR.'ReadyMessageController.php';
        //require_once CONTROLLERS_DIR.'MainBottomController.php';
        break;
    case 'show':
        require_once CONTROLLERS_DIR.'ShowMessageController.php';
        break;
    case 'input':
        require_once CONTROLLERS_DIR.'InputFormController.php';
        break;
}



require_once CONTROLLERS_DIR.'FooterController.php';
