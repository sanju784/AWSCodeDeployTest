/**
 *  本日リンクの設置
 */
var PHPSUS = (PHPSUS||{});
PHPSUS.todayButton = function () {
	var onTodayClick = function (e) {
		var tgt = e.currentTarget;
		var dt = new Date;
		var orgid = $(e.currentTarget).attr("org");


		var year  = dt.getFullYear();						// 年
		var month = ("0" + (dt.getMonth() + 1)).slice(-2);	// 月
		var day   = ("0" + dt.getDate()).slice(-2)			// 日
		$("#" + orgid).val(year + "/" + month + "/" + day);
		
	};
	// パネル内コントロールイベントの生成
	$(function(){
		$("frmCond").delegate('a.today', 'click', onTodayClick );
	});
	return function (div) {
		$("input.today", div).each( function (i, ctrl) {
			var tgt = $(ctrl);
			var id  = ctrl.id;
			if (!id)
			{
				id = 'today'+i;
				$(ctrl).attr('id', id);
			}
			var html = '<a href="#" org="'+id+'" class="today"><img src="/images/ui/date.png" /></a>';
			tgt.after($(html).trigger('change',[tgt]).bind('click', onTodayClick));
		});
	};
}();
