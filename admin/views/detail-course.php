<? if (isset($HOOK_TOP)) echo $HOOK_TOP; ?>
<? if (isset($_GET['i']) and $_GET['i'] == 'success'): ?>
	<div class="alert alert-success">
		<a class="close" data-dismiss='alert'>&times;</a>
		<strong>OK</strong> <?= $notification ?>
	</div>	
<? endif; ?>


<h2><?= ucfirst($table_label)?> <small><?= $_SESSION['course_label'] ?></small></h2>



<div style="clear:both;"></div>

 <ul class="nav nav-tabs">
      <li class="active"><a href="#a" data-toggle="tab">Course details</a></li>
  <li><a href="#b" data-toggle="tab">Contents  (<?= count($table_pages) ?>)</a></li>
  <li><a href="#c" data-toggle="tab">Fases  (<?= count($table_fases) ?>)</a></li>
  <li><a href="#d" data-toggle="tab">Challengers  (<?= count($table_challengers) ?>)</a></li>
  <li><a href="#e" data-toggle="tab">Files  (<?= count($table_files) ?>)</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">

        


  <div class="tab-pane active in" id="a">
 
 
<? if (count($details) > 0): ?>
<div class="well">
<a class="btn btn-success" style="clear:both;"  href="form/build/courses/<?= $coursesId ?>"><i class="icon-plus"></i> Edit</a>
<div style="clear:both"></div>
<div style="float:left;margin-bottom:200px;margin-right:30px"><img width="300" src="../data/img/<?= $details['foto'] ?>"></div>
<?= $details['description'] ?><br><br>
<b>Profile:</b> <?= $details['profile'] ?><br>
<b>Duration:</b> <?= $details['duration'] ?><br>
<b>Fecha incio:</b> <?= $details['date_ini'] ?><br>
<b>Price:</b> <?= $details['price'] ?><br>
<b>Destacado Highlight:</b> <?= $details['highlight'] ?><br>
<b>Destacado Subhightlight:</b> <?= $details['subhighlight'] ?><br>
<b>Destacado Home:</b> <?= $details['destacado_home'] ?><br>
<br>

</div>		
<? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>


</div>
  <div class="tab-pane" id="b"> 
 


<a class="btn btn-success" style="float:left;clear:both;"  href="form/build/apartados_programas"><i class="icon-plus"></i> <?=ADDNEW?></a><input class="" placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" id="search_pagination" value="">
    
        <? if(count($table_pages)> 0): ?>
    <table class='table table-striped table-bordered tablaMain'   border="0" >
        <thead>
            <tr>
			<th>Id</th>
         	<?	foreach ($items_head_pages as $item):
          ?>
            	<th nowrap><?= formatear_primera_may($item) ?>	</th>		 
            <? 
           		
            endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($table_pages);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="ip-recordsArray_<?= $table_pages[$i]['id']?>">
                <?    $row = $table_pages[$i]; 
                		foreach ($row as  $k => $cell): ?>

                        <td>  <?= $cell;?></td>

<?
                    endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='show/coursesdetail/<?= $table_pages[$i]['id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('ip-recordsArray_<?= $table_pages[$i]['id']?>','<?= $itable_pages[$i]['id']?>','','apartados_programas');"><img src='views/img/x_11x11.png'></a></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
    
    <? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>

</div>
  <div class="tab-pane" id="c">

    <h3>Fases (<?= count($table_fases) ?>)</h3>
    
    <a class="btn btn-success" style="float:left;clear:both;"  href="form/build/fases"><i class="icon-plus"></i> <?=ADDNEW?></a><input class="" placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" id="search_pagination" value="">
    <? if(count($table_fases)> 0): ?>
        <table class='table table-striped table-bordered tablaMain '   border="0" >
        <thead>
            <tr>
			<th>Id</th>
         	<?	foreach ($items_head_fases as $item): ?>
            	<th nowrap><?= formatear_primera_may($item) ?>	</th>		 
            <? endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($table_fases);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $table_fases[$i]['id']?>">
                <?    $row = $table_fases[$i]; 
                		foreach ($row as  $cell): ?>

                        <td>  <?= $cell;?></td>

                    <? endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='show/coursesdetail/<?= $items[$i]['id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $items[$i]['id']?>','<?= $items[$i]['id']?>','','fases');"><img src='views/img/x_11x11.png'></a></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
    <? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>
</div>
  <div class="tab-pane" id="d">

<h3>Challengers</h3>

 <a class="btn btn-success" style="float:left;clear:both;"  href="form/build/challengers"><i class="icon-plus"></i> <?=ADDNEW?></a><input class="" placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" id="search_pagination" value="">
    <? if(count($table_challengers)> 0): ?>
        <table class='table table-striped table-bordered tablaMain '   border="0" >
        <thead>
            <tr>
			<th>Id</th>
         	<?	foreach ($items_head_challengers as $item): ?>
            	<th nowrap><?= formatear_primera_may($item) ?>	</th>		 
            <? endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($table_challengers);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $table_fases[$i]['id']?>">
                <?    $row = $table_fases[$i]; 
                		foreach ($row as  $cell): ?>

                        <td>  <?= $cell;?></td>

                    <? endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='show/coursesdetail/<?= $items[$i]['id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $items[$i]['id']?>','<?= $items[$i]['id']?>','','challengers');"><img src='views/img/x_11x11.png'></a></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
    <? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>



    </div>
    
    <div class="tab-pane" id="e">

<h3>Files</h3>

 <a class="btn btn-success" style="float:left;clear:both;"  href="form/build/coursefiles"><i class="icon-plus"></i> <?=ADDNEW?></a><input class="" placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" id="search_pagination" value="">
    <? if(count($table_files)> 0): ?>
        <table class='table table-striped table-bordered tablaMain '   border="0" >
        <thead>
            <tr>
			<th>Id</th>
         	<?	foreach ($items_head_files as $item): ?>
            	<th nowrap><?= formatear_primera_may($item) ?>	</th>		 
            <? endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($table_files);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $table_files[$i]['id']?>">
                <?    $row = $table_fases[$i]; 
                		foreach ($row as  $cell): ?>

                        <td>  <?= $cell;?></td>

                    <? endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='show/coursesdetail/<?= $items[$i]['id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $items[$i]['id']?>','<?= $items[$i]['id']?>','','coursefiles');"><img src='views/img/x_11x11.png'></a></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
    <? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>



    </div>

</div>
    <? if(!empty($HOOK_FOOTER)) echo $HOOK_FOOTER; ?>
    <script>
   $('.nav-tabs li a').click(function (e) {
  e.preventDefault();

})
    </script>