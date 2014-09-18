

<footer>
	<div class="footer">
		<div class="row">
			<div class="col-md-9">

				<div class="winner">
					<span id="winnerdit"><p>C'est le winner qui l'a dit !</p></span>
					<div class="citation"><p><em>"Ce qui ne nous tue pas, nous rend plus fort."</em></p></div>
				</div>	
			</div>

			<div class="col-md-3">		
						<button class="btn btn-primary btn-lg boutonwinner" data-toggle="modal" data-target="#ModalPropalWinner">J'ai une citation de winner!</button>
			</div>
		</div>
	</div>
</footer>

<!-- MODALE POUR PROPOSER UN ARTICLE-->
<div class="modal fade" id="ModalPropalArticle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
				</div>
				<div class="modal-body">
					<!-- <p>Racontez-nous votre histoire...&hellip;</p> -->
					<?php $widgetNL = new WYSIJA_NL_Widget(true);
					echo $widgetNL->widget(array('form' => 3, 'form_type' => 'php'));?>
				<!-- <input type="text"></input> -->
				</div>
		</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
</div><!-- /.modal -->					
							
<!-- MODALE POUR PROPOSER UNE CITATION WINNER-->					
<div class="modal fade" id="ModalPropalWinner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-body">
				<!-- <p>Votre citation de winner...&hellip;</p> -->
				<?php $widgetNL = new WYSIJA_NL_Widget(true);
echo $widgetNL->widget(array('form' => 4, 'form_type' => 'php'));?>
				</div>
				</div>
		</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/global.js"></script>


<?php
	wp_footer();
?>


</body>
</html>