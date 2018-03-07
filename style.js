$(document).bind('mobileinit', function(){
	
	});

/** 
*Some basic css customizations will be here
*Additional javascript will also be found here
*/
	
	$( function () {
	
	$('a').attr('data-ajax', 'false');
	$('#see_about').css({ 'text-decoration':'none', 'color':'#fff'});
	
	$(" div[data-role='header'] ").css({
			 'background':'orange',
			 'text-shadow':'none',
			 'color':'#fff'
		});
		
	$('li a').css({'background':'#f35a1b', 'text-shadow':'none', 'color':'#fff'});
	
	$('#act_box').focus( function () {
		$("#add_act_btn").css('margin-top','50px');
	});
	
	$('#add_act_btn').click(function (){
		var act_box_val = $('#act_box').val();
		$('#details p').html(act_box_val);
		
			window.location = 'index.php#main';
	});
	
	$('#details p').animate({ 
			marginTop:'-25px'
		},10000).animate({'margin-top':'2px'},15000);
	
		
	
}); //closing all jquery code 

	
function _(x){
	return document.getElementById(x);
	}
	 	
function start(){

	 minu = 25;
	 seco = 0;	
	 interval = setInterval('secon()',1000);
	 _('start_t').removeAttribute('onclick');
	playAud();
	}
	
	function timer(){
	time = _('time');
	
	 if(minu <= 5 && minu > 0 && seco == 0) {
		
		  _('status').innerHTML = 'Recap';
		}
					
		else if(minu == 0 && seco == 0){
				_('status').innerHTML = 'Break';
				_('pomo_img').style.display = 'none';
				playAud();
			}
			
		else if( minu < 0 ){
			minu = 0;
			clearInterval(interval);
			time.innerHTML = minu +":0"+ setSeco ;
	 			 _('status').innerHTML = 'Break';
		}
	
		
		else if( minu < 10 ){
			 time.innerHTML = '0'+minu +":"+ seco;
			}

	else{
			  _('status').innerHTML='Focus';
			}
			
	time.innerHTML = minu +":"+ seco;		
	}

	function secon(){
		
		if(seco == 0 ){
			minu -= 1;
			seco = 60;
			}
		
		seco--;
		timer();	
	}

	function reset(){
		clearInterval(interval);
		var minu = 25;
		var seco = 0;
		
		_('status').innerHTML = 'Waiting';
		time.innerHTML = minu +":"+ seco;
		_('start_t').setAttribute('onclick','start()');
		window.reload();
		}
		
		function playAud(){
			_('aud').play();
			 if('vibrate'in navigator){
					navigator.vibrate(2000);
				}
			}