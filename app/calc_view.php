<?php
include _ROOT_PATH.'/templates/top.php';
?>

			<!-- Main -->
				<div id="main" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Uproszczony kalkulator kredytowy</h2>
							<p>Spróbuj policzyć przybliżoną ratę kredytu</p>
						</header>

						<!-- Form -->
							<section>
								<h3>Kalkulator</h3>
								<form method="post" action=""<?php print(_APP_URL);?>/app/calc.php">
									<div class="row gtr-uniform gtr-50">
										<div class="col-12">
											<input type="text" name="amo" id="id_amo" value="<?php out($form['amo']); ?>" placeholder="Kwota kredytu" />
										</div>
										<div class="col-12">
											<input type="text" name="yr" id="id_yr" value="<?php out($form['yr'] ); ?>" placeholder="Liczba lat" />
										</div>
										<div class="col-12">
											<input type="text" name="pct" id="id_pct" value="<?php out($form['pct']); ?>" placeholder="Oprocentowanie" />
										</div>

										<div class="col-12">
												<input type="submit" value="Oblicz" class=" button primary fit" />
										</div>
									</div>
								</form>
							</section>

                        <?php
                        //wyświeltenie listy błędów, jeśli istnieją
                        if (isset($messages)) {
                            if (count ( $messages ) > 0) {
                                echo '<ol class="messages">';
                                foreach ( $messages as $key => $msg ) {
                                    echo '<li>'.$msg.'</li>';
                                }
                                echo '</ol>';
                            }
                        }
                        ?>

                        <?php
                        //wyświeltenie listy informacji, jeśli istnieją
                        if (isset($infos)) {
                            if (count ( $infos ) > 0) {
                                echo '<ol class="infos">';
                                foreach ( $infos as $key => $msg ) {
                                    echo '<li>'.$msg.'</li>';
                                }
                                echo '</ol>';
                            }
                        }
                        ?>

                        <?php if (isset($result)){ ?>
                            <div class="result">
                                <?php echo 'Miesięczna rata będzie wynosić ok. : '.number_format($result, 2,'.',''); ?>
                            </div>
                        <?php } ?>
					</div>
				</div>

<?php
include _ROOT_PATH.'/templates/bottom.php';
?>