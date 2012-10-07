

$(document).ready(function() {


	var imgcount = $('.tv-list li img').size() - 1;
for(var imgs = 0; imgs <= imgcount; imgs++)
{	
	$('.tv-list li:eq(' + imgs + ') img').bind('load', function(){  
		//alert(imgs);
		var src = $(this).attr('src');	
		var wi = $(this).width();	
		var he = $(this).height();	
		var count = 20;
		var forto = count - 1;
		var frag = he / count;	
		var ref = ""; 
		$(this).parent().append("<i class='ref' style='width:" + wi + "; overflow:hidden;'></i>"); 
		for(var i = 0; i <= forto; i++) 
		{
			var spr = frag * i; 
			if(i < 10)
			{ 
				var op = "0.0"+i; 
				var opie = i; 
			}
			else
			{
				var op = "0."+i; 
				var opie = i; 
			}
			ref = "<i style='background:url("+src+") no-repeat 0px -"+spr+"px;width:"+wi+"px;height:"+frag+"px;-webkit-transform:scale(1,-1);-moz-transform:scale(1,-1);-o-transform:scale(1,-1); filter:alpha(opacity=" + opie + ") flipv();opacity:"+op+";'></i>" + ref;
		}
		$(this).parent().children('.ref').append(ref); // вставляем созданные фрагменты в див .ref
		return false;
	});
}


/* datepicker */
	$.datepicker.regional['ru'] = {
        closeText: 'Закрыть',
        prevText: '',
        nextText: '',
        currentText: 'Сегодня',
        monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
	        'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
	        monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
	        'Июл','Авг','Сен','Окт','Ноя','Дек'],
	        dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
	        dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
	        dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
	        weekHeader: 'Нед',
	        dateFormat: 'dd.mm.yy',
	        firstDay: 1,
	        isRTL: false,
	        showMonthAfterYear: false,
	        yearSuffix: ''};
    $.datepicker.setDefaults($.datepicker.regional['ru']);
	$('.date-select').datepicker();



$('.tv-list li img').hover(function(){
	$(this).stop().animate({'margin-top':'-5px'}, 100); 
	$(this).parent().children('.ref').stop().animate({'margin-top':'-5px','opacity':'0.7', 'height':'68px'}, 100); 
},
function(){
	$(this).stop().animate({'margin-top':'0px'}, 100); 
	$(this).parent().children('.ref').stop().animate({'margin-top':'0px','opacity':'1',  'height':'63px'}, 100); 
});


	/* placeholder */
	$('input[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur();


	$(function(){
		if ($.browser.webkit || $.browser.mozilla) {
			$('input, textarea').on('focus',function(){
			if ( $(this).attr('placeholder') ) $(this).data('placeholder', $(this).attr('placeholder')).removeAttr('placeholder');
		}).on('blur', function(){
			if ( $(this).data('placeholder') ) $(this).attr('placeholder', $(this).data('placeholder')).removeData('placeholder');
		});
		}
	});

	
	$('.tv-tabs').tabs();




	
	$('.mmenu > li').hover(function() {
			$(this).addClass('mm-hover');
			$(this).find('ul').show();
		}, function(){
			$(this).removeClass('mm-hover');
			$(this).find('ul').hide();
	});
	
	$('.tv-list').jcarousel({
		scroll: 1,
		animation: 300
	});

	$('.j-future-list').jcarousel({
		scroll: 1,
		animation: 300,
        itemLastInCallback: {
            onBeforeAnimation: function(instance, li, index, state) {
//                console.log(index + " - " + state);
            },
            onAfterAnimation: function(instance, li, index, state) {
                $('.premiere-wrapper').hide();
                $('#premiere-wrapper-' + index).show();
            }
        }

	});

	$('.tv-list a').poshytip({
		className: 'tip-twitter',
		showTimeout: 1,
		alignTo: 'target',
		alignX: 'center',
		alignY: 'bottom',
		offsetY: -50,
		allowTipHover: true,
		fade: false,
		slide: false
	});





});

function loadPlayer(id, video_uri) {

    var params = { allowScriptAccess: "always" };
    var atts = { id: "myytplayer" };

    var video_id = URI(video_uri).query().split("=")[1];

    swfobject.embedSWF("http://www.youtube.com/v/" + video_id + "?enablejsapi=1&playerapiid=ytplayer&version=3",
        "player-" + id, "426", "233", "8", null, null, params, atts);

    return true;
}