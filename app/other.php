<?php
require_once dirname(__FILE__).'/../config.php';
//ochrona widoku
//include _ROOT_PATH.'/app/security/check.php';
?>

<?php
include _ROOT_PATH.'/templates/top.php';
?>

			<!-- Sekcja artykul -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Inna chroniona strona</h2>
							<p>Przykładowy tekst na stronie</p>
						</header>
						<pre>
							<code>
ArrayList int list = new ArrayList<>();
Random random = new Random();
for (int x = 0; x < 10; x ++) {
list.add(random.nextInt(100));
}

System.out.println("Lista przed sortowaniem:");
for (int x : list) {
System.out.print( x + " | ");
}

Collections.sort(list);

System.out.println("\nLista po sortowaniu:");
for (int x : list) {
System.out.print( x + " | ");
}

/*Lista przed sortowaniem:
22 | 60 | 5 | 19 | 5 | 4 | 31 | 13 | 23 | 73 |
Lista po sortowaniu:
4 | 5 | 5 | 13 | 19 | 22 | 23 | 31 | 60 | 73 |*/
							</code>
						</pre>

					</div>
                </section>

<?php
include _ROOT_PATH.'/templates/bottom.php';
?>