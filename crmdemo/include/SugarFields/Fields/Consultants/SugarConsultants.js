(function(){if(SUGAR.ConsultantsWidget){return};var Dom=YAHOO.util.Dom;SUGAR.ConsultantsWidget=function(module){
	if(!SUGAR.ConsultantsWidget.count[module])SUGAR.ConsultantsWidget.count[module]=0;this.count=SUGAR.ConsultantsWidget.count[module];SUGAR.ConsultantsWidget.count[module]++;this.module=module;this.id=this.module+this.count;if(document.getElementById(module+'_con_widget_id'))
document.getElementById(module+'_con_widget_id').value=this.id;SUGAR.ConsultantsWidget.instances[this.id]=this;}
SUGAR.ConsultantsWidget.instances={};SUGAR.ConsultantsWidget.count={};SUGAR.ConsultantsWidget.prototype={conTemplate:'<tr id="ConsultantsRow">'+'<td nowrap="NOWRAP"><input type="text" title="email address 0" name="Consultants{$index}" id="Consultants0" size="30"/></td>'+'<td><span>&nbsp;</span><img id="removeButton0" name="0" src="index.php?entryPoint=getImage&amp;themeName=Sugar&amp;imageName=delete_inline.gif"/></td>'+'<td><input type="hidden" name="emailAddressVerifiedValue0" id="ConsultantsVerifiedValue0" value=""/></td></tr>',numberConsultants:0,replyToFlagObject:new Object(),verifying:false,enterPressed:false,tabPressed:false,emailView:"",emailIsRequired:false,tabIndex:-1,prefillConsultants:function(tableId,o){for(i=0;i<o.length;i++){o[i].email_address=o[i].email_address.replace('&#039;',"'");
	this.addConsultants(tableId,o[i].email_address);}},
	
addConsultants:function(tableId,address){
	//alert(this.numberConsultants);
var insertInto=Dom.get(tableId);var parentObj=insertInto.parentNode;
var newContent=document.createElement("input");
var nav=new String(navigator.appVersion);
var removeButton=document.createElement("button");
var removeButtonImg=document.createElement('img');
var tbody=document.createElement("tbody");
var tr=document.createElement("tr");
var td1=document.createElement("td");
var td2=document.createElement("td");
var td3=document.createElement("td");
var tabIndexCount=0;
if(typeof(SUGAR.TabFields)!='undefined'&&typeof(SUGAR.TabFields['con1'])!='undefined'){tabIndexCount=SUGAR.TabFields['con1'];}
newContent.setAttribute("type","text");newContent.setAttribute("name",this.id+"Consultants"+this.numberConsultants);newContent.setAttribute("id",this.id+"Consultants"+this.numberConsultants);newContent.setAttribute("tabindex",tabIndexCount);
newContent.setAttribute("size","30");newContent.setAttribute("title",SUGAR.language.get('app_strings','LBL_CONSULTANT_TITLE'));

removeButtonImg.setAttribute('src',"index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=id-ff-remove-nobg.png");removeButton.setAttribute("id",this.id+"removeButton"+this.numberConsultants);removeButton.setAttribute("class","id-ff-remove");removeButton.setAttribute("name",this.numberConsultants);removeButton.eaw=this;removeButton.setAttribute("tabindex",tabIndexCount);

removeButton.onclick=function(){this.eaw.removeConsultants(this.name);return false;};
removeButton.appendChild(removeButtonImg);tr.setAttribute("id",this.id+"ConsultantsRow"+this.numberConsultants);td1.setAttribute("nowrap","NOWRAP");td2.setAttribute("align","center");td1.appendChild(newContent);td1.appendChild(document.createTextNode(" "));spanNode=document.createElement('span');spanNode.innerHTML='&nbsp;';td2.appendChild(spanNode);
//if(this.numberConsultants!=0||typeof(this.emailIsRequired)=="undefined"||!this.emailIsRequired)
td2.appendChild(removeButton);tr.appendChild(td1);tr.appendChild(td2);
tbody.appendChild(tr);insertInto.appendChild(tbody);parentObj.insertBefore(Dom.get('targetBody'),insertInto);

newContent.eaw=this;
var form=Dom.getAncestorByTagName(insertInto,"form");
if(SUGAR.forms.AssignmentHandler.VARIABLE_MAP[form.name])
SUGAR.forms.AssignmentHandler.registerForm(form.name,form);
$('#number_con').val(this.numberConsultants);
this.numberConsultants++;this.addInProgress=false;
},
	
removeConsultants:function(index){

//removeFromValidate(this.emailView,this.id+'Consultants'+index);
var oNodeToRemove=$("#"+this.id+'ConsultantsRow'+index);
var form=oNodeToRemove.parents("form")[0];oNodeToRemove.find("input").each(function(index,node){$(node).remove();});oNodeToRemove.css("display","none");var removedIndex=parseInt(index);if(this.numberConsultants!=removedIndex){for(var x=removedIndex+1;x<this.numberConsultants;x++){Dom.get(this.id+'Consultants'+x).setAttribute("name",this.id+"Consultants"+(x-1));Dom.get(this.id+'Consultants'+x).setAttribute("id",this.id+"Consultants"+(x-1));

var rButton=Dom.get(this.id+'removeButton'+x);rButton.setAttribute("name",(x-1));rButton.setAttribute("id",this.id+"removeButton"+(x-1));Dom.get(this.id+'ConsultantsRow'+x).setAttribute("id",this.id+'ConsultantsRow'+(x-1));}
}
this.numberConsultants--;if(this.numberConsultants==0){return;}
if(SUGAR.forms.AssignmentHandler.VARIABLE_MAP[form.name])
SUGAR.forms.AssignmentHandler.registerForm(form.name,form);
},
	toggleCheckbox:function(el)
{
	var form=document.forms[this.emailView];if(!form){form=document.forms['editContactForm'];}
if(YAHOO.env.ua.ie){for(i=0;i<form.elements.length;i++){var id=new String(form.elements[i].id);if(id.match(/emailAddressInvalidFlag/gim)&&form.elements[i].type=='checkbox'&&id!=el.id){form.elements[i].checked=false;}}
el.checked=true;}},forceSubmit:function(){var theForm=Dom.get(this.emailView);if(theForm){theForm.action.value='Save';if(!check_form(this.emailView)){return false;}
if(this.emailView=='EditView'){theForm.submit();}else if(this.emailView.indexOf('DCQuickCreate')>0){DCMenu.save(theForm.id);}else if(this.emailView.indexOf('QuickCreate')>=0){SUGAR.subpanelUtils.inlineSave(theForm.id,theForm.module.value+'_subpanel_save_button');}}}};ConsultantsWidgetLoaded=true;})();
