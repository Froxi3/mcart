<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="col-md-12">
		<h3 class="footer-heading mb-4"><?=GetMessage("MFT_FOOTER_NAVIGATION")?></h3>
	</div>
	<?foreach ($arResult["menu"] as $column):?>
		<div class="col-md-6 col-lg-6">
			<ul class="list-unstyled">
				<?foreach ($column as $value):?>
					<li>
						<a href="<?=$value["LINK"]?>">
							<?=$value["TEXT"]?>
						</a>
					</li>
				<?endforeach;?>
			</ul>
		</div>
	<?endforeach;?>
<?endif?>