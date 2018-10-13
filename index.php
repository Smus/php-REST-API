<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    # code...
} if else ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
} else {
    http_response_code(405);
}
?>
