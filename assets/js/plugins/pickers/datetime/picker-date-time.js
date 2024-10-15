!function(a,b,c){"use strict";c("#datetimepicker1").datetimepicker(),c("#datetimepicker2").datetimepicker({locale:"fr"}),c("#datetimepicker3").datetimepicker({format:"LT"}),c(".datetimepicker4").datetimepicker(),c("#datetimepicker5").datetimepicker({defaultDate:"11/1/2013",disabledDates:[moment("12/25/2013"),new Date(2013,10,21),"11/22/2013 00:53"]}),c("#datetimepicker6").datetimepicker(),c("#datetimepicker7").datetimepicker({useCurrent:!1}),c("#datetimepicker6").on("dp.change",function(a){c("#datetimepicker7").data("DateTimePicker").minDate(a.date)}),c("#datetimepicker7").on("dp.change",function(a){c("#datetimepicker6").data("DateTimePicker").maxDate(a.date)}),c("#datetimepicker8").datetimepicker({icons:{time:"icon-clock",date:"icon-calendar",up:"icon-angle-up",down:"icon-angle-down"}}),c("#datetimepicker9").datetimepicker({viewMode:"years"}),c("#datetimepicker10").datetimepicker({viewMode:"years",format:"MM/YYYY"}),c("#datetimepicker11").datetimepicker({daysOfWeekDisabled:[0,6]}),c("#datetimepicker12").datetimepicker({inline:!0,sideBySide:!0}),c(".pickadate").pickadate(),c(".pickadate-short-string").pickadate({weekdaysShort:["S","M","Tu","W","Th","F","S"],showMonthsShort:!0}),c(".pickadate-select-year").pickadate({selectYears:8}),c(".pickadate-firstday").pickadate({firstDay:1}),c(".pickadate-buttons").pickadate({today:"",close:"Close Picker",clear:""}),c(".pickadate-limits").pickadate({min:[2016,8,20],max:[2016,10,30]}),c(".pickadate-format").pickadate({format:"Selecte!d Date : dddd, dd mmmm, yyyy",formatSubmit:"mm/dd/yyyy",hiddenPrefix:"prefix__",hiddenSuffix:"__suffix"}),c(".pickadate-arrow").pickadate({monthPrev:"&larr;",monthNext:"&rarr;",weekdaysShort:["Su","Mo","Tu","We","Th","Fr","Sa"],showMonthsFull:!1}),c(".pickadate-disable-weekday").pickadate({disable:[3]}),c(".pickadate-disable-dates").pickadate({disable:[[2016,5,10],[2016,5,15],[2016,5,20]]}),c(".pickadate-selectors").pickadate({labelMonthNext:"Next month",labelMonthPrev:"Previous month",labelMonthSelect:"Pick a Month",labelYearSelect:"Pick a Year",selectMonths:!0,selectYears:!0}),c(".pickadate-dropdown").pickadate({selectMonths:!0,selectYears:!0}),c(".pickadate-events").pickadate({onStart:function(){console.log("Hi there!!!")},onRender:function(){console.log("Holla... rendered new")},onOpen:function(){console.log("Picker Opened")},onClose:function(){console.log("I'm Closed now")},onStop:function(){console.log("Have a great day ahead!!")},onSet:function(a){console.log("All stuff:",a)}}),c(".pickadate-translations").pickadate({formatSubmit:"dd/mm/yyyy",monthsFull:["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"],monthsShort:["Jan","Fev","Mar","Avr","Mai","Juin","Juil","Aou","Sep","Oct","Nov","Dec"],weekdaysShort:["Dim","Lun","Mar","Mer","Jeu","Ven","Sam"],today:"aujourd'hui",clear:"clair",close:"Fermer"}),c(".pickadate-minmax").pickadate({dateMin:-8,dateMax:!0});var d=c("#picker_from").pickadate(),e=d.pickadate("picker"),f=c("#picker_to").pickadate(),g=f.pickadate("picker");e.get("value")&&g.set("min",e.get("select")),g.get("value")&&e.set("max",g.get("select")),e.on("set",function(a){a.select?g.set("min",e.get("select")):"clear"in a&&g.set("min",!1)}),g.on("set",function(a){a.select?e.set("max",g.get("select")):"clear"in a&&e.set("max",!1)}),c(".pickatime").pickatime(),c(".pickatime-button").pickatime({clear:""}),c(".pickatime-format").pickatime({format:"T!ime selected: h:i a",formatLabel:"h:i a",formatSubmit:"HH:i",hiddenPrefix:"prefix__",hiddenSuffix:"__suffix"}),c(".pickatime-formatTime").pickatime({format:"T!ime selected: h:i a",formatLabel:"<b>h</b>:i <!i>a</!i>",formatSubmit:"HH:i",hiddenPrefix:"prefix__",hiddenSuffix:"__suffix"}),c(".pickatime-formatlabel").pickatime({formatLabel:function(a){var b=(a.pick-this.get("now").pick)/60,c=b<0?" !hours to now":b>0?" !hours from now":"now";return"h:i a <sm!all>"+(b?Math.abs(b):"")+c+"</sm!all>"}}),c(".pickatime-minmax").pickatime({min:new Date(2015,3,20,7),max:new Date(2015,7,14,18,30)}),c(".pickatime-limits").pickatime({min:-5,max:!0}),c(".pickatime-intervals").pickatime({interval:150}),c(".pickatime-disable").pickatime({disable:[new Date(2016,3,20,4,30),new Date(2016,3,20,9)]}),c(".pickatime-disable-integer").pickatime({disable:[3,5,7,13,17,21]}),c(".pickatime-disable-object").pickatime({disable:[{from:[2,0],to:[5,30]}]}),c(".pickatime-disable-all").pickatime({disable:[!0,3,5,7,[0,30],[2,0],[8,30],[9,0]]}),c(".pickatime-close-action").pickatime({closeOnSelect:!1,closeOnClear:!1}),c(".pickatime-events").pickatime({onStart:function(){console.log("This is PickATime!!!")},onRender:function(){console.log("Holla... PickATime Here")},onOpen:function(){console.log("PickATime Opened")},onClose:function(){console.log("I'm Closed now")},onStop:function(){console.log("Have a great day ahead!!")},onSet:function(a){console.log("All stuff:",a)}}),c(".pickatime-translations").pickatime({formatSubmit:"dd/mm/yyyy",monthsFull:["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"],monthsShort:["Jan","Fev","Mar","Avr","Mai","Juin","Juil","Aou","Sep","Oct","Nov","Dec"],weekdaysShort:["Dim","Lun","Mar","Mer","Jeu","Ven","Sam"],today:"aujourd'hui",clear:"clair",close:"Fermer"}),c(".daterange").daterangepicker(),c(".datetime").daterangepicker({timePicker:!0,timePickerIncrement:30,locale:{format:"MM/DD/YYYY h:mm A"}}),c(".timeseconds").daterangepicker({timePicker:!0,timePickerIncrement:30,timePicker24Hour:!0,timePickerSeconds:!0,locale:{format:"MM-DD-YYYY h:mm:ss"}}),c(".singledate").daterangepicker({singleDatePicker:!0,showDropdowns:!0}),c(".autoapply").daterangepicker({autoApply:!0}),c(".linkedCalendars").daterangepicker({linkedCalendars:!1}),c(".dateLimit").daterangepicker({dateLimit:{days:7}}),c(".showdropdowns").daterangepicker({showDropdowns:!0}),c(".showweeknumbers").daterangepicker({showWeekNumbers:!0}),c(".dateranges").daterangepicker({ranges:{Today:[moment(),moment()],Yesterday:[moment().subtract(1,"days"),moment().subtract(1,"days")],"Last 7 Days":[moment().subtract(6,"days"),moment()],"Last 30 Days":[moment().subtract(29,"days"),moment()],"This Month":[moment().startOf("month"),moment().endOf("month")],"Last Month":[moment().subtract(1,"month").startOf("month"),moment().subtract(1,"month").endOf("month")]}}),c(".shawCalRanges").daterangepicker({ranges:{Today:[moment(),moment()],Yesterday:[moment().subtract(1,"days"),moment().subtract(1,"days")],"Last 7 Days":[moment().subtract(6,"days"),moment()],"Last 30 Days":[moment().subtract(29,"days"),moment()],"This Month":[moment().startOf("month"),moment().endOf("month")],"Last Month":[moment().subtract(1,"month").startOf("month"),moment().subtract(1,"month").endOf("month")]},alwaysShowCalendars:!0}),c(".openRight").daterangepicker({opens:"left"}),c(".drops").daterangepicker({drops:"up"}),c(".buttonClass").daterangepicker({drops:"up",buttonClasses:"btn",applyClass:"btn-info",cancelClass:"btn-danger"}),c(".localeRange").daterangepicker({ranges:{"Aujourd'hui":[moment(),moment()],Hier:[moment().subtract("days",1),moment().subtract("days",1)],"Les 7 derniers jours":[moment().subtract("days",6),moment()],"Les 30 derniers jours":[moment().subtract("days",29),moment()],"Ce mois-ci":[moment().startOf("month"),moment().endOf("month")],"le mois dernier":[moment().subtract("month",1).startOf("month"),moment().subtract("month",1).endOf("month")]},locale:{applyLabel:"Vers l'avant",cancelLabel:"Annulation",startLabel:"Date initiale",endLabel:"Date limite",customRangeLabel:"Sélectionner une date",daysOfWeek:["Di","Lu","Ma","Me","Je","Ve","Sa"],monthNames:["Janvier","février","Mars","Avril","Маi","Juin","Juillet","Août","Septembre","Octobre","Novembre","Decembre"],firstDay:1}})}(window,document,jQuery);