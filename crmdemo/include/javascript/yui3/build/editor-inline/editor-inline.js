/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('editor-inline',function(Y,NAME){var InlineEditor=function(){InlineEditor.superclass.constructor.apply(this,arguments);};Y.extend(InlineEditor,Y.EditorBase,{initializer:function(){this.plug(Y.Plugin.ContentEditable);}});Y.InlineEditor=InlineEditor;},'3.15.0',{"requires":["editor-base","content-editable"]});