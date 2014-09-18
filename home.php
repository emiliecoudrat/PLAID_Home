<?php get_header(); ?>

<div class="row">
	<section>
		<!-- <div class="section">  -->
		<div class="col-md-8">

<!-- 		tentative d'offset		<div class="col-md-offset-0.5 col-md-8">  -->				

 			<?php if (have_posts()) : ?>
 				<?php query_posts('showposts=3') ?>
   				<?php while (have_posts()) : the_post(); ?>
   					
   					<div class="sujets">
   					
   					<div class="titreart">
   						<a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
   					</div>

   					<div class="artimg">
   						<figure class="img pull-right">
						<?php the_post_thumbnail('medium'); ?>
						<div class="mask"></div>
						</figure>
					</div>


   					<div class="article"><?php the_content(); ?></div>
   					
   					<div class="star">
          				<span><i class="fa fa-star yellow"></i></span>
        			</div>

   					</div>

   				<?php endwhile; ?>
   				<?php wp_reset_query(); ?>
 			<?php endif; ?>


					<article>
						<div class="sujets">
							<!-- <div class="row"> -->
								<!-- <div class="col-md-9"> -->
								<div class="titreart"><h3><!-- J’ai un lave-vaisselle dans ma chambre depuis deux ans. --></h3></div>

							<div class="artimg">
										
								<div class="pull-right">

									<!-- <div class="backgroundimg">
												<img src="<?php bloginfo('template_directory'); ?>/img/danielfirman.png" alt="Daniel Firman" class="img-thumbnail borderjaune"/>
									</div>
									<div class="mask"></div> -->	
								</div>

								<div class="article">
											<!-- <p></p>
											<p class="p1">Le constat est amer. Deux ans. Deux ans qu’un lave-vaisselle trône majestueusement dans votre chambre. Enfin, lave-vaisselle, l’honneur est à moitié sauve, il s’agit d’un « mini » lave-vaisselle. Sa taille avantageuse devait lui permettre de trouver sa place dans votre mini cuisine, conséquence logique de votre mini appartement. Mais voilà, aussi compact soit-il, il n’a jamais pu faire son trou entre le petit réfrigérateur, l’étroite machine à laver ou la micro gazinière. Cette idée géniale du lave-vaisselle n’était évidemment pas la vôtre. Dans votre pyramide de Maslow, ne plus laver votre argenterie à la main ne se classait pas dans le top 3 de vos besoins en confort. Vous, côté confort, vous en étiez plutôt à ne plus dormir sur un canapé clic-clac, trouver une armoire contenant au moins la moitié de votre garde-robe, voire même tout simplement disposer d’une source de lumière digne de ce nom dans votre pièce à vivre. Oui mais voilà, votre belle-mère et vous n’avez pas tout à fait construit la même pyramide des besoins. Elle, se demande encore comment vous vivez sans un cook pro. Vous, il vous semble plus réaliste de dîner avec Elton John que d’être un jour propriétaire d’un sèche-linge. Loin de toutes ces considérations, votre marâtre a donc eu la bonne idée de vous offrir un lave-vaisselle histoire de faciliter votre vie au foyer, espérant sans doute – message subliminal de la robotique - offrir quelques précieux moments à votre vie conjugale en vue d’un baby cook ! <span><a href="article.html"><button type="button" class="btn btn-default lirelasuite">Lire la suite</button></a></p>


											<p>Mauvaise pioche. Vous l’avez tourné dans tous les sens ce fichu lave-vaisselle, vous avez envisagé toutes les options possibles, jusqu’à  l’improbable suspension murale, mais il n’est jamais rentré nulle part. La mission impossible s’est donc achevée par un abandon pur et simple dans la  chambre, seule pièce disposant encore d’un semblant de mètres carrés au sol (à défaut de sommier et d’armoire). Vous avez songé à le donner à un ami mais il n’est pas votre ami pour rien et il a le mètre carré compatissant. Vous avez évidemment pensé au Bon coin. Vous y avez pensé  souvent. Fort même. Très très fort. Mais prendre une photo, rédiger une annonce et répondre aux sollicitations vous ont visiblement semblé insurmontables. Au fil du temps, vous lui avez évidemment trouvé une utilité à ce lave-vaisselle : porte-vêtements, table de nuit, siège d’appoint… Pire, votre chat l’a élu perchoir favori. La petite goutte sentimentale qui a fait déborder votre moi plein de bonnes intentions : la séparation devenait impossible, il ferait désormais partie des meubles.</p>

											<p>Les premières présentations de votre lave-vaisselle/table de chevet/panier pour chat à votre entourage, furent un tantinet gênantes mais surmontées grâce à un pragmatisme convaincant : « Ah, ça ? Je le vends la semaine prochaine ! ». Sauf que vos hôtes ont vu les mois défiler et votre lave-vaisselle 6 couverts planter ses racines dans votre parquet, laissant place à votre finesse d’esprit capable de neutraliser les pires bassesses : « Finalement, je trouve que cela donne une petite touche contemporaine à la Daniel Firman, nan ?! »</p> 

											<p><span class="enmodeplaid">En mode PLAID</span>, exit les appartements témoins. Lave-vaisselle abandonné, tableau décroché, rideaux jamais installés, ces petits défauts font tout le charme de votre nid douillet et surtout le vôtre.  Imposez votre déco !</p> -->

										</div>
									</div>
								</div> <!-- ferme sujet -->
							
							<div class="sujets">

							<div class="titreart"><h3><!-- Je me suis fait draguer par un toxico de la ligne 4. --></h3></div>

								<div class="artimg">
								

									<div class="pull-right">
										<div class="img">
											<!-- <img src="<?php bloginfo('template_directory'); ?>/img/metro.jpg" alt="Metro" class="img-thumbnail borderjaune"/> -->
										</div>
										<div class="mask"></div>
									</div>

									<div class="article">
										<!-- <p></p>
										<p class="p1">J'étais tranquillement assise sur mon strapontin dans le métro en train de lire un article sur l'érosion des sols (c'est le premier élément improbable de ce récit ) quand je me rends compte qu'un mec bizarre me mate... En fait, un tox... un drogué si vous préférez…</p>

										<p>Je me concentre sur mon article... Je ne veux pas attirer son regard… Je me replonge fissa dans ma lecture… Râpé, il met ses lunettes de soleil et vient se mettre debout devant moi… Je reste concentrée sur ma lecture… Il se baisse et me demande :</p>

										<p>- Vous aimez Madonna?</p>
										<p>- Euh, pas plus que ça…</p>
										<p>- Ah, moi je suis fan ! Vous lui ressemblez beaucoup.</p> 
										<p>- Je ne sais pas comment le prendre. Elle est quand même bien tapée…</p> 

										<p>- Moi, je la trouve jolie. C’est un compliment. </p>
										<p>- Eh bien… merci alors…</p>
										<p>- Vous avez ses pommettes et son nez</p> 
										<p>- (Ben merci, tu peux aussi dire que j’ai l’air d’un travelo ) (ça c'est ce que je pense )   <span><a href="article.html"><button type="button" class="btn btn-default lirelasuite">Lire la suite</button></a></span></p>
										<p>Si vous le dites (ça c’est ce que je dis) (c’est tout même un tox, il a tout son matos à la main, je ne voudrais pas le contrarier et qu’il me plante une seringue dans le bras) </p>
										<p>- Mais vous êtes plus jeune. Je pense. </p>
										<p>- Euh oui (connard) (genre 30 ans de moins, une génération quoi)..</p>
										<p>Panne d’électricité entre la station Simplon et Porte de Clignancourt. Le métro s’arrête, dans le noir.</p>
										<p>- (drogué mais lucide) Dites, je peux m’installer à côté de vous ? </p>
										<p>- Ben oui, j’ai pas trop le choix… (en fait)</p>
										<p>- Vous êtes mariée ?</p>
										<p>- Non</p>
										<p>- Ah. Vous savez je ne m’inquiète pas vraiment pour vous. Ca ne devrait pas tarder. </p>
										<p>- Euh merci je le dirai à mes parents, ça les rassurera. </p>
										<p>- Moi, vous savez je suis célibataire depuis longtemps. Je cherche une fille, un peu comme vous en fait. Mais bon, il faut savoir que j’ai beaucoup de défauts. Je fume, je bois un peu...(genre, il me prévient vu que visiblement j’ai envoyé de forts signaux « tu me plais »)…</p>
										<p>Le métro redémarre</p>
										<p>- Vous allez à votre travail, je peux vous accompagner histoire qu’on fasse un brin de causette sur le chemin ?</p>
										
										<p>Finalement, j’ai réussi à m’en dépatouiller devant la boulangerie à la sortie du métro.</p>

										<p><span class="enmodeplaid">En mode PLAID</span>, c’était une belle rencontre, il ne m'a pas planté de seringue dans le bras, ça m’a fait un bien fou au moral (je me sens belle comme une nana bodybuildée et refaite de 50 ans), je relativise (il aurait pu dire Lady gaga) et puis j'ai eu Music dans la tête toute la journée!</p>
										</p> -->
			
									</div> <!-- ferme article -->
								</div> <!-- ferme artimg -->
				</div> <!-- ferme sujets -->
			</article>
		

		</div> <!-- ferme col-m-8 -->
	</section>

		<div class="col-md-4 colonnedroite">

		<!-- MON ASIDE -->
		
			<aside>

				<ul class="rowaside">
   					<?php dynamic_sidebar( 'Main Sidebar' ); ?>
				</ul>
			
			</aside>
		</div> <!-- col-md-4 -->
	
</div> <!-- fermeture row globale -->
</div> <!-- fermeture de wrapper-->
	
<?php get_footer(); ?>
