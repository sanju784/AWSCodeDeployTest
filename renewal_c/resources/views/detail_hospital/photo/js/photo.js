$(function(){

   
   
  $(window).on('load', function(){
	  orderList();		
	});
	
	
	$('#photo .btnTab li').click(function(){
	  
	  $('#photo .btnTab li').removeClass('current'); 
	  $(this).addClass('current');
	  
	  var vn = $(this).attr('id');
	  //console.log('vn '+vn);
	  if ( vn == 'all' ) {
			$('#photo ul.list li').show();  
	  }else{
	   $('#photo ul.list li').hide();
	   $('#photo ul.list').find('.'+vn).show();
	  }
	  
	  orderList();
	});
	  
	function orderList(){
		$('ul.list li:visible:odd').css('clear', 'right');
		$('ul.list li:visible:even').css('clear', 'left');
	}






});