<?php
require_once "book.php";
?>

<?php
function createBooks():array {
    $books = array(
        new Book("Head First PHP & MySQL", 4650, "Lynn Beighley", "978-4873114446"),
        new Book("リーダブルコード", 2600, "Dustin Boswell", "978-4873115658"),
        new Book("Head First デザインパターン", 5060, "Eric Freeman", "978-4873112497"),
        new Book("PHPによるデザインパターン入門", 2400, "下岡秀幸", "978-4798015163")
    );
    return $books;    
}

?>