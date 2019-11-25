<?php
require_once("funx.php");
$books = createBooks();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>課題・商品検索アプリケーション</title>
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="./css/shoppingcart.css" />
</head>

<body id="products" class="list">
	<header>
		<h1>商品検索アプリケーション</h1>
	</header>

	<main>
		<article id="result">
			<h2>商品検索 - 検索結果</h2>
			<section>
				<h3>商品一覧</h3>
				<table>
					<caption><a href="entry.html">検索画面に戻る</a><a href="cart.php?id=<?= $i ?>">カートの中身を見る</a></caption>
					<tr>
						<th>書籍名</th>
						<th>価格</th>
						<th>著者</th>
						<th>ISBN</th>
						<th></th>
					</tr>
					<?php  for ($i = 0; $i < count($books); $i++) { ?>
					<tr>
			            <td><?= $books[$i]->getName() ?></td>
			            <td><?= $books[$i]->getPrice() ?>円</td>
			            <td><?= $books[$i]->getAuthor() ?></td>
			            <td><?= $books[$i]->getCode() ?></td>
			            <td><a href="cart.php?id=<?= $i ?>">カートに入れる</a></td>
		            </tr>
					<?php } ?>
					
				</table>
			</section>
		</article>
	</main>

	<footer>
		<div id="copyright">(C) 2019 The Advanced Course on Web System Development</div>
	</footer>
</body>

</html>