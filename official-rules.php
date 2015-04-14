<?php require_once( 'portal/cms.php' ); ?>

<cms:template title="Official Rules Template" clonable="1">
	<cms:editable name="rules_text" type="richtext" />
</cms:template>

<?php include_once('header.php'); ?>

		<div class="container-fluid dropShadowMain" id="home" style="max-width: 1200px; background-color: #ffffff;">
			<div class="row">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-12">
							<cms:show rules_text />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php'); ?>

  </body>
</html>
<?php COUCH::invoke(); ?>
