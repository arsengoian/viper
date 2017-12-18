<div class="col-md-18" style="position:relative;">
	<div ng-view="" class="ng-scope">
		<div id="category" masonry="" preserve-order="" class="ng-scope" style="position: relative; height: 616px;">
			<?php
				$c = 0;
				if (isset($DATA['session']) && $DATA['session']["auth"] && !$done):?>
					<div id="addp" class="masonry-brick col-md-7 product ng-scope loaded" 
						style="position: absolute; left: 0px; top: 0px;"
						onclick="document.getElementById('pr-add-form').style.display = 'flex'"
					>+</div>				
			<?php $c++; 
				endif; 
				foreach ($DATA['products'] as $prod):
					switch( $c % 3 ) {
						case 1:
							$l = '250';
							break;
						case 2:
							$l = '500';
							break;
						default:
							$l = '0';
					}
					$h = (string) 352 * floor($c / 3);
					$c++;
				?>
				<div class="masonry-brick col-md-7 product ng-scope loaded" 
					style="position: absolute; left: <?php echo $l?>px; top: <?php echo $h?>px;"
				>
					<?php if (isset($DATA['session']) && $DATA['session']["auth"]):?>
						<div data-id="<?php echo $prod['token']?>" style="cursor: pointer; position: absolute; top: 0em; background: rgba(255,255,255,0.7); padding: 0.5em; box-sizing: initial; right: 0em; width: 50px; height: 21px; display: flex; justify-content: space-between;">
							<div style="width: 45%; background-image: url(/data/imgres/pencil.svg);background-size: contain; background-repeat: no-repeat;" onclick="pr_edt(event, this)"></div>
							<div style="width: 45%; background-image: url(/data/imgres/rubbish-bin.svg);background-size: contain; background-repeat: no-repeat;" onclick="pr_del(event, this)"></div>
						</div>
					<?php endif?>
					<a href="<?php $this -> printWebsiteAddress()?>/product/<?php echo $prod['token']?>">
						<div class="cardimg" style="background-image: url(<?php echo $prod['img']?>)"></div>  
						<div class="title ng-binding"><?php echo $prod['name']?></div>
					</a>
					<div class="price ng-binding"><?php echo $prod['price']/100 .'.'. (($v = $prod['price'] % 100) < 10 ? '0'.$v : $v);?> ₴</div>
					<div class="charBlock">
						<?php if ($prod['characteristics']): foreach (unserialize($prod['characteristics']) as $k => $v):?>
							<div class="chars ng-scope" >
								<p style="float:left" class="ng-binding"><?php echo $k ?></p><p style="float:right" class="ng-binding"><?php echo $v ?></p>
								<div class="clear"></div>
							</div>
						<?php endforeach; endif?>
					</div>
				</div>
			<?php endforeach; $GLOBALS['footer_crutch'] = 60 + ceil($c / 3)*360 + 60?>
		</div>
	</div>
</div>
