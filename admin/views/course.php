<? if (isset($HOOK_TOP)) echo $HOOK_TOP; ?>
<? if (isset($_GET['i']) and $_GET['i'] == 'success'): ?>
	<div class="alert alert-success">
		<a class="close" data-dismiss='alert'>&times;</a>
		<strong>OK</strong> <?= $notification ?>
	</div>	
<? endif; ?>


<h2><?= ucfirst($table_label)?></h2>

<a class="btn btn-success" style="float:left;clear:both;"  href="form/build/<?= $table ?>"><i class="icon-plus"></i> <?=ADDNEW?></a><input class="" placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" id="search_pagination" value="">

<div style="clear:both;"></div>
<div class="">
<? if (count($items) > 0): ?>
    <table class='table table-striped tablaMain'  border="0" >
        <thead>
            <tr>
			<th>Id</th>
         	<?	foreach ($items_head as $item): ?>
            	<th nowrap><?= formatear_primera_may($item) ?>	</th>		 
            <? endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($items);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $items[$i]['id']?>">
                <?    $row = $items[$i]; 
                		foreach ($row as  $cell): ?>

                        <td>  <?= $cell;?></td>

                    <? endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='show/coursesdetail/<?= $items[$i]['id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $items[$i]['id']?>','<?= $items[$i]['id']?>','','<?= $table ?>');"><img src='views/img/x_11x11.png'></a></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
</div>		
<? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>

<? if(!empty($HOOK_FOOTER)) echo $HOOK_FOOTER; ?>
