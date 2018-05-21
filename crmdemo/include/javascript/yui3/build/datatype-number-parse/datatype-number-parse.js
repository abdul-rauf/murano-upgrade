/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('datatype-number-parse',function(Y,NAME){var safe=Y.Escape.regex,SPACES='\\s*';Y.mix(Y.namespace("Number"),{_buildParser:Y.cached(function(prefix,suffix,separator,decimal){var regexBits=[],regex;if(prefix){regexBits.push('^'+SPACES+safe(prefix)+SPACES);}
if(suffix){regexBits.push(SPACES+safe(suffix)+SPACES+'$');}
if(separator){regexBits.push(safe(separator)+'(?=\\d)');}
regex=new RegExp('(?:'+regexBits.join('|')+')','g');if(decimal==='.'){decimal=null;}
return function(val){val=val.replace(regex,'');return decimal?val.replace(decimal,'.'):val;};}),parse:function(data,config){var parser;if(config&&typeof data==='string'){parser=this._buildParser(config.prefix,config.suffix,config.thousandsSeparator,config.decimalSeparator);data=parser(data);}
if(typeof data==='string'&&Y.Lang.trim(data)!==''){data=+data;}
if(typeof data!=='number'||!isFinite(data)){data=null;}
return data;}});Y.namespace("Parsers").number=Y.Number.parse;Y.namespace("DataType");Y.DataType.Number=Y.Number;},'3.15.0',{"requires":["escape"]});