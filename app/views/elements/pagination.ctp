<?php $paginator->options(array('url'=>$this->passedArgs));?>
<div class="pager">
<?php if($paginator->hasPrev()) { ?>
<?php echo $paginator->prev('« Previous ', null, null, array('class' => 'previous'));?>
<?php } ?>
<?php //echo $paginator->counter(array('format' => ' %page% / %pages%pages（total:%count%）'));?>
<?php if($paginator->hasNext()) { ?>
<?php echo $paginator->next(' Next »', null, null, array('class' => 'next'));?>
<?php } ?>
<!--pager --></div>
