/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('axis-time-base',function(Y,NAME){var Y_Lang=Y.Lang;function TimeImpl()
{}
TimeImpl.NAME="timeImpl";TimeImpl.ATTRS={labelFormat:{value:"%b %d, %y"}};TimeImpl.prototype={_type:"time",_maximumGetter:function()
{var max=this._getNumber(this._setMaximum);if(!Y_Lang.isNumber(max))
{max=this._getNumber(this.get("dataMaximum"));}
return parseFloat(max);},_maximumSetter:function(value)
{this._setMaximum=this._getNumber(value);return value;},_minimumGetter:function()
{var min=this._getNumber(this._setMinimum);if(!Y_Lang.isNumber(min))
{min=this._getNumber(this.get("dataMinimum"));}
return parseFloat(min);},_minimumSetter:function(value)
{this._setMinimum=this._getNumber(value);return value;},_getSetMax:function()
{var max=this._getNumber(this._setMaximum);return(Y_Lang.isNumber(max));},_getSetMin:function()
{var min=this._getNumber(this._setMinimum);return(Y_Lang.isNumber(min));},formatLabel:function(val,format)
{val=Y.DataType.Date.parse(val);if(format)
{return Y.DataType.Date.format(val,{format:format});}
return val;},GUID:"yuitimeaxis",_dataType:"time",_getKeyArray:function(key,data)
{var obj,keyArray=[],i=0,val,len=data.length;for(;i<len;++i)
{obj=data[i][key];if(Y_Lang.isDate(obj))
{val=obj.valueOf();}
else
{val=new Date(obj);if(Y_Lang.isDate(val))
{val=val.valueOf();}
else if(!Y_Lang.isNumber(obj))
{if(Y_Lang.isNumber(parseFloat(obj)))
{val=parseFloat(obj);}
else
{if(typeof obj!=="string")
{obj=obj;}
val=new Date(obj).valueOf();}}
else
{val=obj;}}
keyArray[i]=val;}
return keyArray;},_updateMinAndMax:function()
{var data=this.get("data"),max=0,min=0,len,num,i;if(data&&data.length&&data.length>0)
{len=data.length;max=min=data[0];if(len>1)
{for(i=1;i<len;i++)
{num=data[i];if(isNaN(num))
{continue;}
max=Math.max(num,max);min=Math.min(num,min);}}}
this._dataMaximum=max;this._dataMinimum=min;},_getCoordFromValue:function(min,max,length,dataValue,offset)
{var range,multiplier,valuecoord,isNumber=Y_Lang.isNumber;dataValue=this._getNumber(dataValue);if(isNumber(dataValue))
{range=max-min;multiplier=length/range;valuecoord=(dataValue-min)*multiplier;valuecoord=offset+valuecoord;}
else
{valuecoord=NaN;}
return valuecoord;},_getNumber:function(val)
{if(Y_Lang.isDate(val))
{val=val.valueOf();}
else if(!Y_Lang.isNumber(val)&&val)
{val=new Date(val).valueOf();}
return val;}};Y.TimeImpl=TimeImpl;Y.TimeAxisBase=Y.Base.create("timeAxisBase",Y.AxisBase,[Y.TimeImpl]);},'3.15.0',{"requires":["axis-base"]});