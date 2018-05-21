/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({events:{'change .existingAddress':'updateExistingAddress','click  .btn-edit':'toggleExistingAddressProperty','click  .removeEmail':'removeExistingAddress','click  .addEmail':'addNewAddress','change .newEmail':'addNewAddress'},_flag2Deco:{primary_address:{lbl:"LBL_EMAIL_PRIMARY",cl:"primary"},opt_out:{lbl:"LBL_EMAIL_OPT_OUT",cl:"opted-out"},invalid_email:{lbl:"LBL_EMAIL_INVALID",cl:"invalid"}},plugins:['Tooltip','ListEditable','EmailClientLaunch'],initialize:function(options){options=options||{};options.def=options.def||{};if(_.isUndefined(options.def.emailLink)){options.def.emailLink=true;}
if(options.model&&options.model.fields&&options.model.fields.email1&&options.model.fields.email1.required){options.def.required=options.model.fields.email1.required;}
if(options.view.action==='filter-rows'){options.viewName='filter-rows-edit';}
this._super('initialize',[options]);this.addEmailOptions({related:this.model});},bindDataChange:function(){this.model.on('change:'+this.name,function(){if(this.action!=='edit'){this.render();}},this);},_render:function(){var emailsHtml='';this._super("_render");if(this.tplName==='edit'){_.each(this.value,function(email){emailsHtml+=this._buildEmailFieldHtml(email);},this);this.$el.prepend(emailsHtml);}},_buildEmailFieldHtml:function(email){var editEmailFieldTemplate=app.template.getField('email','edit-email-field'),emails=this.model.get(this.name),index=_.indexOf(emails,email);return editEmailFieldTemplate({max_length:this.def.len,index:index===-1?emails.length-1:index,email_address:email.email_address,primary_address:email.primary_address,opt_out:email.opt_out,invalid_email:email.invalid_email});},addNewAddress:function(evt){if(!evt)return;var email=this.$(evt.currentTarget).val()||this.$('.newEmail').val(),currentValue,emailFieldHtml,$newEmailField;email=$.trim(email);if((email!=='')&&(this._addNewAddressToModel(email))){currentValue=this.model.get(this.name);emailFieldHtml=this._buildEmailFieldHtml({email_address:email,primary_address:currentValue&&(currentValue.length===1),opt_out:false,invalid_email:false});$newEmailField=this._getNewEmailField().closest('.email').before(emailFieldHtml);this.addPluginTooltips($newEmailField.prev());if(this.def.required&&this._shouldRenderRequiredPlaceholder()){var label=app.lang.get('LBL_REQUIRED_FIELD',this.module),el=this.$(this.fieldTag).last(),placeholder=el.prop('placeholder').replace('('+label+') ','');el.prop('placeholder',placeholder.trim()).removeClass('required');}}
this._clearNewAddressField();},updateExistingAddress:function(evt){if(!evt)return;var $inputs=this.$('.existingAddress'),$input=this.$(evt.currentTarget),index=$inputs.index($input),newEmail=$input.val(),primaryRemoved;newEmail=$.trim(newEmail);if(newEmail===''){primaryRemoved=this._removeExistingAddressInModel(index);$input.closest('.email').remove();if(primaryRemoved){if(this.view&&this.view.action==='list'){var addresses=this.model.get(this.name)||[];var primaryAddress=_.filter(addresses,function(address){if(address.primary_address){return true;}});if(primaryAddress[0]&&primaryAddress[0].email_address){app.alert.show('list_delete_email_info',{level:'info',autoClose:true,messages:app.lang.get('LBL_LIST_REMOVE_EMAIL_INFO')});$input.val(primaryAddress[0].email_address);}}
this.$('[data-emailproperty=primary_address]').first().addClass('active');}}else{this._updateExistingAddressInModel(index,newEmail);}},removeExistingAddress:function(evt){if(!evt)return;var $deleteButtons=this.$('.removeEmail'),$deleteButton=this.$(evt.currentTarget),index=$deleteButtons.index($deleteButton),primaryRemoved,$removeThisField;primaryRemoved=this._removeExistingAddressInModel(index);$removeThisField=$deleteButton.closest('.email');this.removePluginTooltips($removeThisField);$removeThisField.remove();if(primaryRemoved){this.$('[data-emailproperty=primary_address]').first().addClass('active');}
if(this.def.required&&_.isEmpty(this.model.get(this.name))){this.decorateRequired();}},toggleExistingAddressProperty:function(evt){if(!evt)return;var $property=this.$(evt.currentTarget),property=$property.data('emailproperty'),$properties=this.$('[data-emailproperty='+property+']'),index=$properties.index($property);if(property==='primary_address'){$properties.removeClass('active');}
this._toggleExistingAddressPropertyInModel(index,property);},_addNewAddressToModel:function(email){var existingAddresses=this.model.get(this.name)?app.utils.deepCopy(this.model.get(this.name)):[],dupeAddress=_.find(existingAddresses,function(address){return(address.email_address===email);}),success=false;if(_.isUndefined(dupeAddress)){existingAddresses.push({email_address:email,primary_address:(existingAddresses.length===0)});this.model.set(this.name,existingAddresses);success=true;}
return success;},_updateExistingAddressInModel:function(index,newEmail){var existingAddresses=app.utils.deepCopy(this.model.get(this.name));existingAddresses[index].email_address=newEmail;this.model.set(this.name,existingAddresses);},_toggleExistingAddressPropertyInModel:function(index,property){var existingAddresses=app.utils.deepCopy(this.model.get(this.name));if(property==='primary_address'){existingAddresses[index][property]=false;_.each(existingAddresses,function(email,i){if(email[property]){existingAddresses[i][property]=false;}});}
if(existingAddresses[index][property]){existingAddresses[index][property]=false;}else{existingAddresses[index][property]=true;}
this.model.set(this.name,existingAddresses);},_removeExistingAddressInModel:function(index){var existingAddresses=app.utils.deepCopy(this.model.get(this.name)),primaryAddressRemoved=!!existingAddresses[index]['primary_address'];existingAddresses=_.reject(existingAddresses,function(emailInfo,i){return i==index;});if(primaryAddressRemoved){var address=_.first(existingAddresses);if(address){address.primary_address=true;}}
this.model.set(this.name,existingAddresses);return primaryAddressRemoved;},_clearNewAddressField:function(){this._getNewEmailField().val('');},_getNewEmailField:function(){return this.$('.newEmail');},decorateError:function(errors){var emails;this.$el.closest('.record-cell').addClass("error");emails=this.$('input:not(.newEmail)');_.each(errors,function(errorContext,errorName){if(errorName==='email'||errorName==='duplicateEmail'){_.each(emails,function(e){var $email=this.$(e),email=$email.val();var isError=_.find(errorContext,function(emailError){return emailError===email;});if(!_.isUndefined(isError)){this._addErrorDecoration($email,errorName,[isError]);}},this);}else{var $email=this.$('input:first');this._addErrorDecoration($email,errorName,errorContext);}},this);},_addErrorDecoration:function($input,errorName,errorContext){var isWrapped=$input.parent().hasClass('input-append');if(!isWrapped)
$input.wrap('<div class="input-append error '+this.fieldTag+'">');$input.next('.error-tooltip').remove();$input.after(this.exclamationMarkTemplate([app.error.getErrorString(errorName,errorContext)]));this.createErrorTooltips($input.next('.error-tooltip'));},bindDomChange:function(){if(this.tplName==='list-edit'){this._super("bindDomChange");}},format:function(value){value=app.utils.deepCopy(value);if(_.isArray(value)&&value.length>0){_.each(value,function(email){email.hasAnchor=this.def.emailLink&&!email.opt_out&&!email.invalid_email;},this);}else if((_.isString(value)&&value!=="")||this.view.action==='list'){value=[{email_address:value,primary_address:true,hasAnchor:true}];}
value=this.addFlagLabels(value);return value;},addFlagLabels:function(value){var flagStr="",flagArray;_.each(value,function(emailObj){flagStr="";flagArray=_.map(emailObj,function(flagValue,key){if(!_.isUndefined(this._flag2Deco[key])&&this._flag2Deco[key].lbl&&flagValue){return app.lang.get(this._flag2Deco[key].lbl);}},this);flagArray=_.without(flagArray,undefined);if(flagArray.length>0){flagStr=flagArray.join(", ");}
emailObj.flagLabel=flagStr;},this);return value;},unformat:function(value){if(this.view.action==='list'){var emails=app.utils.deepCopy(this.model.get(this.name));if(!_.isArray(emails)){emails=[];}
emails=_.map(emails,function(email){if(email.primary_address&&email.email_address!==value){email.email_address=value;}
return email;},this);if(emails.length==0){emails.push({email_address:value,primary_address:true});}
return emails;}
if(this.view.action==='filter-rows'){return value;}},focus:function(){if(this.action!=='disabled'){this._getNewEmailField().focus();}},_retrieveEmailOptionsFromLink:function($link){return{to_addresses:[{email:$link.data('email-to'),bean:this.emailOptions.related}]};}})