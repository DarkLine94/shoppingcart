<?php
require_once("funx.php");
session_start();

$cart = null;
if(isset($_SESSION["cart"])){
    $cart = $_SESSION["cart"];
} else {
    $cart = [];
}

$id = -1;
if (isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
}
$mode = "";
if (isset($_REQUEST["mode"])){
    $mode = $_REQUEST["mode"];
}
$books = createBooks();
$book = $books[$id];

$cart[] = $book;

$_SESSION["cart"] = $cart;

if ($mode === "clear"){
    unset($_SESSION);
    session_destroy();
    $cart = [];
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ショップシステム</title>
	<link rel="stylesheet" href="../shoppingcart/css/style.css" />
	<link rel="stylesheet" href="../shoppingcart/css/shoppingcart.css" />
</head>
<body>
    <h1>Shopping System</h1>
    <p><a href="result.php">買い物を続ける</a>　<a href="cart.php?mode=clear">カートを空にする</a></p>
    <table>
        <tr>
			<th>書籍名</th>
			<th>価格</th>
			<th>著者</th>
			<th>ISBN</th>
		</tr>
		<?php  for ($i = 0; $i < count($cart); $i++) { ?>
		<tr>
			<td><?= $books[$i]->getName() ?></td>
			<td><?= $books[$i]->getPrice() ?>円</td>
			<td><?= $books[$i]->getAuthor() ?></td>
			<td><?= $books[$i]->getCode() ?></td>
		</tr>
		<?php } ?>
    </table>
</body>