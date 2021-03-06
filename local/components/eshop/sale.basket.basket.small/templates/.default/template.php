<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//echo '<pre>';print_r($arResult);echo '</pre>';
?>
<div class="emarket-basket-small">
	<a href="<?=$arParams["PATH_TO_BASKET"]?>" class="ico basket-ico"></a>
	<div class="text">
	<?
		if(count($arResult["ITEMS"])>0) 
		{
			$ebs_sum = 0;
			
			foreach($arResult["ITEMS"] as $item) {
				$ebs_quantity = (int)$item['QUANTITY'];
				$ebs_price = (int)$item['PRICE'];
				$ebs_sum += $ebs_quantity*$ebs_price;
					
				switch($item['CURRENCY'])
				{
					case 'RUB': $ebs_currency = GetMessage('K_RUB'); break;
				}
			}
			?>
			<table>
				<tr>
					<td><?=GetMessage("EBS_QUANTITY")?></td>
					<td><?=count($arResult["ITEMS"])?></td>
				</tr>
				<tr>
					<td><?=GetMessage("EBS_SUM")?></td>
					<td><?=number_format($ebs_sum, 0, '', ' ').'&nbsp;'.$ebs_currency?></td>
				</tr>
			</table>
			<?
		}
		else
		{
			echo '<p class="error">'.GetMessage("EBS_EMPTY").'</p>';
		}
		?>
	</div>
</div>