/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-ohlc',function(Y,NAME){function OHLCSeries()
{OHLCSeries.superclass.constructor.apply(this,arguments);}
OHLCSeries.NAME="ohlcSeries";OHLCSeries.ATTRS={type:{value:"ohlc"},graphic:{lazyAdd:false,setter:function(val){if(!this.get("rendered")){this.set("rendered",true);}
this.set("upmarker",val.addShape({type:"path"}));this.set("downmarker",val.addShape({type:"path"}));return val;}},upmarker:{},downmarker:{}};Y.extend(OHLCSeries,Y.RangeSeries,{_drawMarkers:function(xcoords,opencoords,highcoords,lowcoords,closecoords,len,width,halfwidth,styles)
{var upmarker=this.get("upmarker"),downmarker=this.get("downmarker"),opencoord,highcoord,lowcoord,closecoord,left,right,leftPadding=styles.padding.left,marker,up,cx,i,height;upmarker.set(styles.upmarker);downmarker.set(styles.downmarker);upmarker.clear();downmarker.clear();for(i=0;i<len;i=i+1)
{cx=xcoords[i]+leftPadding;left=cx-halfwidth;right=cx+halfwidth;opencoord=opencoords[i];highcoord=highcoords[i];lowcoord=lowcoords[i];closecoord=closecoords[i];up=opencoord>closecoord;height=lowcoord-highcoord;marker=up?upmarker:downmarker;marker.moveTo(left,opencoord);marker.lineTo(cx,opencoord);marker.moveTo(cx,highcoord);marker.lineTo(cx,lowcoord);marker.moveTo(cx,closecoord);marker.lineTo(right,closecoord);}
upmarker.end();downmarker.end();},_toggleVisible:function(visible)
{this.get("upmarker").set("visible",visible);this.get("downmarker").set("visible",visible);},destructor:function()
{var upmarker=this.get("upmarker"),downmarker=this.get("downmarker");if(upmarker)
{upmarker.destroy();}
if(downmarker)
{downmarker.destroy();}},_getDefaultStyles:function()
{var styles={upmarker:{stroke:{color:"#00aa00",alpha:1,weight:1}},downmarker:{stroke:{color:"#aa0000",alpha:1,weight:1}}};return this._mergeStyles(styles,OHLCSeries.superclass._getDefaultStyles());}});Y.OHLCSeries=OHLCSeries;},'3.15.0',{"requires":["series-range"]});