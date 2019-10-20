!function(n){"use strict";var t=function(){this.$body=n("body"),this.$realData=[]};t.prototype.createPlotGraph=function(t,a,o,e,l,i,r,s){n.plot(n(t),[{data:a,label:l[0],color:i[0]},{data:o,label:l[1],color:i[1]},{data:e,label:l[2],color:i[2]}],{series:{lines:{show:!0,fill:!0,lineWidth:2,fillColor:{colors:[{opacity:.5},{opacity:.5}]}},points:{show:!1},shadowSize:0},legend:{position:"nw"},grid:{hoverable:!0,clickable:!0,borderColor:r,borderWidth:1,labelMargin:10,backgroundColor:s},yaxis:{min:0,max:300,color:"rgba(0,0,0,0.1)"},xaxis:{color:"rgba(0,0,0,0.1)"},tooltip:!0,tooltipOpts:{content:"%s: Value of %x is %y",shifts:{x:-60,y:25},defaultTheme:!1}})},t.prototype.createPieGraph=function(t,a,o,e){var l=[{label:a[0],data:o[0]},{label:a[1],data:o[1]},{label:a[2],data:o[2]}],i={series:{pie:{show:!0}},legend:{show:!0},grid:{hoverable:!0,clickable:!0},colors:e,tooltip:!0,tooltipOpts:{content:"%s, %p.0%"}};n.plot(n(t),l,i)},t.prototype.randomData=function(){for(0<this.$realData.length&&(this.$realData=this.$realData.slice(1));this.$realData.length<300;){var t=(0<this.$realData.length?this.$realData[this.$realData.length-1]:50)+10*Math.random()-5;t<0?t=0:100<t&&(t=100),this.$realData.push(t)}for(var a=[],o=0;o<this.$realData.length;++o)a.push([o,this.$realData[o]]);return a},t.prototype.createRealTimeGraph=function(t,a,o){return n.plot(t,[a],{colors:o,series:{lines:{show:!0,fill:!0,lineWidth:2,fillColor:{colors:[{opacity:.45},{opacity:.45}]}},points:{show:!1},shadowSize:0},grid:{show:!0,aboveData:!1,color:"#dcdcdc",labelMargin:15,axisMargin:0,borderWidth:0,borderColor:null,minBorderMargin:5,clickable:!0,hoverable:!0,autoHighlight:!1,mouseActiveRadius:20},tooltip:!0,tooltipOpts:{content:"Value is : %y.0%",shifts:{x:-30,y:-50}},yaxis:{min:0,max:100,color:"rgba(0,0,0,0.1)"},xaxis:{show:!1}})},t.prototype.createDonutGraph=function(t,a,o,e){var l=[{label:a[0],data:o[0]},{label:a[1],data:o[1]},{label:a[2],data:o[2]},{label:a[3],data:o[3]},{label:a[4],data:o[4]}],i={series:{pie:{show:!0,innerRadius:.7}},legend:{show:!0,labelFormatter:function(t,a){return'<div style="font-size:14px;">&nbsp;'+t+"</div>"},labelBoxBorderColor:null,margin:50,width:20,padding:1},grid:{hoverable:!0,clickable:!0},colors:e,tooltip:!0,tooltipOpts:{content:"%s, %p.0%"}};n.plot(n(t),l,i)},t.prototype.init=function(){this.createPlotGraph("#website-stats",[[0,50],[1,130],[2,80],[3,70],[4,180],[5,105],[6,250]],[[0,80],[1,100],[2,60],[3,120],[4,140],[5,100],[6,105]],[[0,20],[1,80],[2,70],[3,140],[4,250],[5,80],[6,200]],["Desktops","Laptops","Tablets"],["#f0f1f4","#ffe082","#35a989"],"#f5f5f5","#fff");this.createPieGraph("#pie-chart #pie-chart-container",["Desktops","Laptops","Tablets"],[20,30,15],["#ffe082","#35a989","#ebeff2"]);var a=this.createRealTimeGraph("#flotRealTime",this.randomData(),["#ffe082"]);a.draw();var o=this;!function t(){a.setData([o.randomData()]),a.draw(),setTimeout(t,(n("html").hasClass("mobile-device"),1e3))}();this.createDonutGraph("#donut-chart #donut-chart-container",["Desktops","Laptops","Tablets"],[29,20,18],["#f0f1f4","#ffe082","#35a989"])},n.FlotChart=new t,n.FlotChart.Constructor=t}(window.jQuery),function(t){"use strict";window.jQuery.FlotChart.init()}();