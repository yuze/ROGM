$(function(){
  $("a.camp").hover(function(){
	var id = $(this).attr("id");
	$("div#masterData").load('/master/data/'+id);
  },function(){}
  );

  $("form.delete").submit(function(){
	if (!confirm('削除しますか？')) {
      return false;
	}
  });
});
