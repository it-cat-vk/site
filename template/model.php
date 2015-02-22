<?php defined("IT_CAT_CMS_RUNNING") or die() ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $page->title ?> — IT-КОТ</title>
		<link href="styles/normalize.css" rel="stylesheet">
		<link href="styles/header.css" rel="stylesheet">
		<link href="styles/main.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="logo"></div>
			<nav>
				<a href="/">Главная</a>
				<a href="/about.html">О нас</a>
				<a href="/news.html">Новости</a>
				<a href="/usable.html">Полезное</a>
				<a href="/fag.html">FAQ</a>
			</nav>
			<div class"menu-button"></div>
		</header>
		<aside>
			<a href="#" class="top-button" onclick="top()"></a>
		</aside>
		<main>
			<script language="php">
				echo "uuu"
			</script>
			<article>
				<h2>Статья специально для Димы</h2>
				<p>Первый абзац. Тут может быть так много текста, что в исходном коде можно ставить переносы строк.
				А можно и не ставить, по желанию. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. И
				прочая бла-бал-бала.</p>
				<p>Второй такой же абзац.</p>
				<h3>Подраздел</h3>
				<p>И тут абзацы.</p>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
				<h3>Описание</h3>
				<p>Вообщем, правило простое: если где-то встречается подряд лишь один элемент, — он и повторяется
				один раз. Если два раза попадается, то его может быть в этом месте сколько угодно раз.<p>
				<h3>О тегах</h3>
				<p>Вообще в HTML5 есть ещё тег section. Предлагаю его вместо article использовать для предпросмотра
				статьи, или там, где по смыслу предполагается много таких на одной странице.<p>
				
				<details open>
				<!-- если честно, я сомневаюсь в корректности применения здесь этого тега -->
					<summary>Информация о публикации</summary>
					<address>
						<p>Автор: <a href="/authors/name.html" rel="author">Имя автора</a></p>
						<p>Опубликовал: <a href="/authors/publisher.html">Кто опубликовал</a></p>
					</address>
					<time datetime="2015-02-16T22:39:33+03:00" title="16.02.2015 22:39">Сегодня пару часов назад</time>
					<!-- Содержимое этого тега будет автоматически обновлятся через JavaScript,
						 основываясь на аттрибуте datetime -->
				</details>
			</article>
			<article>
				<h2>Классическая рыба</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
				Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
				enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
				imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
				Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
				porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
				feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
				imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
				<p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
				adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
				Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
				Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris
				sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit
				cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam,
				scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu
				turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
				posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu.</p>
				<p>Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices
				mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing.
				Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero.
				Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet,
				nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in
				justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor,
				tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae,
				posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae
				tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit.</p>
				<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed
				aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci.
				Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non,
				nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis.
				Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor
				sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis.
				Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque
				velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
				cubilia Curae; Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum
				mollis diam.</p>
				<p>Pellentesque ut neque. Pellentesque habitant morbi tristique senectus et netus et malesuada
				fames ac turpis egestas. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In ac
				felis quis tortor malesuada pretium. Pellentesque auctor neque nec urna. Proin sapien ipsum, porta
				a, auctor quis, euismod ut, mi. Aenean viverra rhoncus pede. Pellentesque habitant morbi tristique
				senectus et netus et malesuada fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat.
				Vivamus quis mi. Phasellus a est. Phasellus magna. In hac habitasse platea dictumst. Curabitur at
				lacus ac velit ornare lobortis. Curabitur a felis in nunc fringilla tristique. Morbi mattis
				ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem. Pellentesque libero tortor,
				tincidunt et, tincidunt eget, semper nec, quam. Sed hendrerit. Morbi ac felis.</p>
				<p>Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo
				quis pede. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas
				libero turpis vel mi. Nunc nulla. Fusce risus nisl, viverra et, tempor et, pretium in, sapien.
				Donec venenatis vulputate lorem. Morbi nec metus. Phasellus blandit leo ut odio. Maecenas
				ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et
				lorem. Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. In auctor lobortis lacus.
				Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Vestibulum ullamcorper
				mauris at ligula. Fusce fermentum. Nullam cursus lacinia erat. Praesent blandit laoreet nibh. Fusce
				convallis metus id felis luctus adipiscing. Pellentesque egestas, neque sit amet convallis pulvinar,
				justo nulla eleifend augue, ac auctor orci leo non est.</p>
				<p>Quisque id mi. Ut tincidunt tincidunt erat. Etiam feugiat lorem non metus. Vestibulum dapibus
				nunc ac augue. Curabitur vestibulum aliquam leo. Praesent egestas neque eu enim. In hac habitasse
				platea dictumst. Fusce a quam. Etiam ut purus mattis mauris sodales aliquam. Curabitur nisi.
				Quisque malesuada placerat nisl. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus.
				Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Vestibulum facilisis, purus
				nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Mauris
				sollicitudin fermentum libero. Praesent nonummy mi in odio. Nunc interdum lacus sit amet orci.
				Vestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel
				mi. Morbi mollis tellus ac sapien. Phasellus volutpat, metus eget egestas mollis, lacus lacus
				blandit dui, id egestas quam mauris ut lacus. Fusce vel dui. Sed in libero ut nibh placerat
				accumsan. Proin faucibus arcu quis ante. In consectetuer turpis ut velit. Nulla sit amet est.
				Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Cras risus ipsum, faucibus
				ut, ullamcorper id, varius ac, leo. Suspendisse feugiat. Suspendisse enim turpis, dictum sed,
				iaculis a, condimentum nec, nisi. Praesent nec nisl a purus blandit viverra. Praesent ac massa at
				ligula laoreet iaculis. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Mauris
				turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Fusce pharetra convallis urna.
				Quisque ut nisi. Donec mi odio, faucibus at, scelerisque quis,</p>
			</article>
			<article>
				<h2>Оригинальный отрывок из трактата Цицерона</h2>
				<p><b>[32]</b> Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque
				laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto
				beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur
				aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt,
				neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet, consectetur, adipisci[ng] velit,
				sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam
				quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
				laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui
				in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat,
				quo voluptas nulla pariatur?</p>
				<p><b>[33]</b> At vero eos et accusamus et iusto odio dignissimos ducimus, qui
				blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi
				sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia
				animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
				Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod
				maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus
				autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates
				repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus,
				ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
				repellat…</p>
			</article>
			<article>
				<h2>Видео для разбавлеия нудного контента</h2>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/zbYGU6cdsYU" frameborder="0" allowfullscreen></iframe>
			</article>
		</main>
		<footer>
			&copy; IT-кот, 2015
		</footer>
	</body>
</html>
