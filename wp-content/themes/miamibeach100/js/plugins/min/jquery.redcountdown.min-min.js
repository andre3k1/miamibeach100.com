!function(e){e.fn.redCountdown=function(t,o){function n(e){switch(e){case"flat-colors":return{labels:!0,style:{element:"",textResponsive:.5,daysElement:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#1abc9c"},textCSS:";font-weight:300;color:#34495e;"},hoursElement:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#2980b9"},textCSS:";font-weight:300;color:#34495e;"},minutesElement:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#8e44ad"},textCSS:";font-weight:300;color:#34495e;"},secondsElement:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#f39c12"},textCSS:";font-weight:300;color:#34495e;"}}};case"flat-colors-fat":return{labels:!0,style:{element:"",textResponsive:.5,daysElement:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#1abc9c"},textCSS:";font-weight:300;color:#34495e;"},hoursElement:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#2980b9"},textCSS:";font-weight:300;color:#34495e;"},minutesElement:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#8e44ad"},textCSS:";font-weight:300;color:#34495e;"},secondsElement:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#f39c12"},textCSS:";font-weight:300;color:#34495e;"}}};case"flat-colors-very-fat":return{labels:!0,style:{element:"",textResponsive:.5,daysElement:{gauge:{thickness:.12,bgColor:"rgba(0,0,0,0.05)",fgColor:"#1abc9c"},textCSS:";font-weight:300;color:#34495e;"},hoursElement:{gauge:{thickness:.12,bgColor:"rgba(0,0,0,0.05)",fgColor:"#2980b9"},textCSS:";font-weight:300;color:#34495e;"},minutesElement:{gauge:{thickness:.12,bgColor:"rgba(0,0,0,0.05)",fgColor:"#8e44ad"},textCSS:";font-weight:300;color:#34495e;"},secondsElement:{gauge:{thickness:.12,bgColor:"rgba(0,0,0,0.05)",fgColor:"#f39c12"},textCSS:";font-weight:300;color:#34495e;"}}};case"flat-colors-black":return{labels:!0,style:{element:"",textResponsive:.5,daysElement:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#1abc9c",lineCap:"round"},textCSS:";font-weight:300;color:#34495e;"},hoursElement:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#2980b9",lineCap:"round"},textCSS:";font-weight:300;color:#34495e;"},minutesElement:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#8e44ad",lineCap:"round"},textCSS:";font-weight:300;color:#34495e;"},secondsElement:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#f39c12",lineCap:"round"},textCSS:";font-weight:300;color:#34495e;"}}};case"black":return{labels:!0,style:{element:"",textResponsive:.5,daysElement:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:";font-weight:300;color:#34495e;"},hoursElement:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:";font-weight:300;color:#34495e;"},minutesElement:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:";font-weight:300;color:#34495e;"},secondsElement:{gauge:{thickness:.01,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:";font-weight:300;color:#34495e;"}}};case"black-fat":return{labels:!0,style:{element:"",textResponsive:.5,daysElement:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:";font-weight:300;color:#34495e;"},hoursElement:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:";font-weight:300;color:#34495e;"},minutesElement:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:";font-weight:300;color:#34495e;"},secondsElement:{gauge:{thickness:.03,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:";font-weight:300;color:#34495e;"}}};case"black-very-fat":return{labels:!0,style:{element:"",textResponsive:.5,daysElement:{gauge:{thickness:.17,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:";font-weight:300;color:#34495e;"},hoursElement:{gauge:{thickness:.17,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:";font-weight:300;color:#34495e;"},minutesElement:{gauge:{thickness:.17,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:";font-weight:300;color:#34495e;"},secondsElement:{gauge:{thickness:.17,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222"},textCSS:";font-weight:300;color:#34495e;"}}};case"black-black":return{labels:!0,style:{element:"",textResponsive:.5,daysElement:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222",lineCap:"round"},textCSS:";font-weight:300;color:#34495e;"},hoursElement:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222",lineCap:"round"},textCSS:";font-weight:300;color:#34495e;"},minutesElement:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222",lineCap:"round"},textCSS:";font-weight:300;color:#34495e;"},secondsElement:{gauge:{thickness:.25,bgColor:"rgba(0,0,0,0.05)",fgColor:"#222",lineCap:"round"},textCSS:";font-weight:300;color:#34495e;"}}};case"white":return{labels:!0,style:{element:"",textResponsive:.5,daysElement:{gauge:{thickness:.03,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:";font-weight:300;color:#fff;"},hoursElement:{gauge:{thickness:.03,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:";font-weight:300;color:#fff;"},minutesElement:{gauge:{thickness:.03,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:";font-weight:300;color:#fff;"},secondsElement:{gauge:{thickness:.03,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:";font-weight:300;color:#fff;"}}};case"white-fat":return{labels:!0,style:{element:"",textResponsive:.5,daysElement:{gauge:{thickness:.06,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:";font-weight:300;color:#fff;"},hoursElement:{gauge:{thickness:.06,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:";font-weight:300;color:#fff;"},minutesElement:{gauge:{thickness:.06,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:";font-weight:300;color:#fff;"},secondsElement:{gauge:{thickness:.06,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:";font-weight:300;color:#fff;"}}};case"white-very-fat":return{labels:!0,style:{element:"",textResponsive:.5,daysElement:{gauge:{thickness:.16,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:";font-weight:300;color:#fff;"},hoursElement:{gauge:{thickness:.16,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:";font-weight:300;color:#fff;"},minutesElement:{gauge:{thickness:.16,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:";font-weight:300;color:#fff;"},secondsElement:{gauge:{thickness:.16,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff"},textCSS:";font-weight:300;color:#fff;"}}};case"white-black":return{labels:!0,style:{element:"",textResponsive:.5,daysElement:{gauge:{thickness:.25,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff",lineCap:"round"},textCSS:";font-weight:300;color:#fff;"},hoursElement:{gauge:{thickness:.25,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff",lineCap:"round"},textCSS:";font-weight:300;color:#fff;"},minutesElement:{gauge:{thickness:.25,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff",lineCap:"round"},textCSS:";font-weight:300;color:#fff;"},secondsElement:{gauge:{thickness:.25,bgColor:"rgba(255,255,255,0.05)",fgColor:"#fff",lineCap:"round"},textCSS:";font-weight:300;color:#fff;"}}}}}function l(){e("#redCountdownCSS").length<=0&&e("body").append("<style id='redCountdownCSS'>.redCountdownWrapper > div { display:inline-block; position:relative; width:calc(25% - 20px); margin:10px; } .redCountdownWrapper .redCountdownValue {  width:100%; line-height:1em; position:absolute; top:50%; text-align:center; left:0; display:block;}</style>"),i.append('<div class="redCountdownWrapper"><div class="redCountdownDays"><input type="text" /><span class="redCountdownValue"><div></div><span></span></span></div><div class="redCountdownHours"><input type="text" /><span class="redCountdownValue"><div></div><span></span></span></div><div class="redCountdownMinutes"><input type="text" /><span class="redCountdownValue"><div></div><span></span></span></div><div class="redCountdownSeconds"><input type="text" /><span class="redCountdownValue"><div></div><span></span></span></div></div>'),i.find(".redCountdownDays input").knob(e.extend({width:"100%",displayInput:!1,readOnly:!0,max:365},b.style.daysElement.gauge)),i.find(".redCountdownHours input").knob(e.extend({width:"100%",displayInput:!1,readOnly:!0,max:24},b.style.hoursElement.gauge)),i.find(".redCountdownMinutes input").knob(e.extend({width:"100%",displayInput:!1,readOnly:!0,max:60},b.style.minutesElement.gauge)),i.find(".redCountdownSeconds input").knob(e.extend({width:"100%",displayInput:!1,readOnly:!0,max:60},b.style.secondsElement.gauge)),i.find(".redCountdownWrapper > div").attr("style",b.style.element),i.find(".redCountdownDays .redCountdownValue").attr("style",b.style.daysElement.textCSS),i.find(".redCountdownHours .redCountdownValue").attr("style",b.style.hoursElement.textCSS),i.find(".redCountdownMinutes .redCountdownValue").attr("style",b.style.minutesElement.textCSS),i.find(".redCountdownSeconds .redCountdownValue").attr("style",b.style.secondsElement.textCSS),i.find(".redCountdownValue").each(function(){e(this).css("margin-top",Math.floor(0-parseInt(e(this).height())/2)+"px")}),b.labels&&(i.find(".redCountdownDays .redCountdownValue > span").html(b.labelsOptions.lang.days),i.find(".redCountdownHours .redCountdownValue > span").html(b.labelsOptions.lang.hours),i.find(".redCountdownMinutes .redCountdownValue > span").html(b.labelsOptions.lang.minutes),i.find(".redCountdownSeconds .redCountdownValue > span").html(b.labelsOptions.lang.seconds),i.find(".redCountdownValue > span").attr("style",b.labelsOptions.style)),c=b.end-b.now,s()}function s(){d=Math.floor(c/86400),f=Math.floor(c%86400/3600),u=Math.floor(c%86400%3600/60),C=Math.floor(c%86400%3600%60%60)}function r(){c--,s(),0>=c&&(h||(h=!0,b.onEndCallback()),d=0,f=0,u=0,C=0),i.find(".redCountdownDays input").val(365-d).trigger("change"),i.find(".redCountdownHours input").val(24-f).trigger("change"),i.find(".redCountdownMinutes input").val(60-u).trigger("change"),i.find(".redCountdownSeconds input").val(60-C).trigger("change"),i.find(".redCountdownDays .redCountdownValue > div").html(d),i.find(".redCountdownHours .redCountdownValue > div").html(f),i.find(".redCountdownMinutes .redCountdownValue > div").html(u),i.find(".redCountdownSeconds .redCountdownValue > div").html(C)}function g(){i.find(".redCountdownWrapper > div").each(function(){e(this).css("height",e(this).width()+"px")}),b.style.textResponsive&&(i.find(".redCountdownValue").css("font-size",Math.floor(i.find("> div").eq(0).width()*b.style.textResponsive/10)+"px"),i.find(".redCountdownValue").each(function(){e(this).css("margin-top",Math.floor(0-parseInt(e(this).height())/2)+"px")})),e(window).trigger("resize"),e(window).resize(e.throttle(50,a))}function a(t){i.find(".redCountdownWrapper > div").each(function(){e(this).css("height",e(this).width()+"px")}),b.style.textResponsive&&i.find(".redCountdownValue").css("font-size",Math.floor(i.find("> div").eq(0).width()*b.style.textResponsive/10)+"px"),i.find(".redCountdownValue").each(function(){e(this).css("margin-top",Math.floor(0-parseInt(e(this).height())/2)+"px")}),i.find(".redCountdownDays input").trigger("change"),i.find(".redCountdownHours input").trigger("change"),i.find(".redCountdownMinutes input").trigger("change"),i.find(".redCountdownSeconds input").trigger("change")}var i=e(this),d,f,u,C,c,h=!1,b={end:void 0,now:e.now(),labels:!0,labelsOptions:{lang:{days:"Days",hours:"Hours",minutes:"Minutes",seconds:"Seconds"},style:"font-size:0.5em;"},style:{element:"",labels:!1,textResponsive:.5,daysElement:{gauge:{thickness:.02,bgColor:"rgba(0,0,0,0)",fgColor:"rgba(0,0,0,1)",lineCap:"butt"},textCSS:""},hoursElement:{gauge:{thickness:.02,bgColor:"rgba(0,0,0,0)",fgColor:"rgba(0,0,0,1)",lineCap:"butt"},textCSS:""},minutesElement:{gauge:{thickness:.02,bgColor:"rgba(0,0,0,0)",fgColor:"rgba(0,0,0,1)",lineCap:"butt"},textCSS:""},secondsElement:{gauge:{thickness:.02,bgColor:"rgba(0,0,0,0)",fgColor:"rgba(0,0,0,1)",lineCap:"butt"},textCSS:""}},onEndCallback:function(){}};t.preset&&(b=e.extend(!0,b,n(t.preset))),b=e.extend(!0,b,t),l(),r();var w=setInterval(r,1e3);g()}}(jQuery);