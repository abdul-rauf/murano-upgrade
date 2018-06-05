<?php /* Smarty version 2.6.11, created on 2018-06-05 08:48:57
         compiled from include/MVC/View/tpls/sidecar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'include/MVC/View/tpls/sidecar.tpl', 20, false),array('function', 'sugar_getscript', 'include/MVC/View/tpls/sidecar.tpl', 28, false),array('modifier', 'cat', 'include/MVC/View/tpls/sidecar.tpl', 54, false),)), $this); ?>

<!DOCTYPE HTML>
<html class="no-js">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=8, IE=9, IE=10, IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <title>SugarCRM</title>
        <link rel="shortcut icon" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'themes/default/images/sugar_icon.ico'), $this);?>
">
        <!-- CSS -->
        <?php $_from = $this->_tpl_vars['css_url']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['url']):
?>
            <link rel="stylesheet" href="<?php echo smarty_function_sugar_getjspath(array('file' => $this->_tpl_vars['url']), $this);?>
"/>
        <?php endforeach; endif; unset($_from); ?>
        <!--[if lt IE 10]>
        <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'themes/default/css/ie.css'), $this);?>
">
        <![endif]-->
        <?php echo smarty_function_sugar_getscript(array('file' => "include/javascript/modernizr.js"), $this);?>

    </head>
    <body>
        <div id="sugarcrm">
            <div id="sidecar">
                <div id="alerts" class="alert-top">
                    <div class="loading gate">
                        <strong><?php echo $this->_tpl_vars['LBL_LOADING']; ?>
</strong>
                        <i class="l1 icon-circle"></i><i class="l2 icon-circle"></i><i class="l3 icon-circle"></i>
                    </div>
                </div>
                <div id="header"></div>
                <div id="content"></div>
                <div id="drawers"></div>
                <div id="footer"></div>
            </div>
        </div>
        <!-- App Scripts -->
        <?php if (! empty ( $this->_tpl_vars['developerMode'] )): ?>
            <?php echo smarty_function_sugar_getscript(array('file' => "sidecar/minified/sidecar.js"), $this);?>

        <?php else: ?>
            <?php echo smarty_function_sugar_getscript(array('file' => "sidecar/minified/sidecar.min.js"), $this);?>

        <?php endif; ?>
        <script src='<?php echo smarty_function_sugar_getjspath(array('file' => $this->_tpl_vars['sugarSidecarPath']), $this);?>
'></script>
        <script src='<?php echo smarty_function_sugar_getjspath(array('file' => $this->_tpl_vars['SLFunctionsPath']), $this);?>
'></script>
        <!-- <script src='<?php echo smarty_function_sugar_getjspath(array('file' => 'sidecar/minified/sugar.min.js'), $this);?>
'></script> -->
        <script src='<?php echo smarty_function_sugar_getjspath(array('file' => ((is_array($_tmp=$this->_tpl_vars['configFile'])) ? $this->_run_mod_handler('cat', true, $_tmp, '?hash=$configHash') : smarty_modifier_cat($_tmp, '?hash=$configHash'))), $this);?>
'></script>
        <?php echo smarty_function_sugar_getscript(array('file' => "cache/include/javascript/sugar_grp7.min.js"), $this);?>

        <?php echo '
        <script language="javascript">
            if (parent.window != window && typeof(parent.SUGAR.App.router) != "undefined") {
                parent.SUGAR.App.router.navigate("#Home", {trigger:true});
            } else {
                var App;
                ';  if ($this->_tpl_vars['authorization']): ?>
                SUGAR.App.cache.set("<?php echo $this->_tpl_vars['appPrefix']; ?>
AuthAccessToken", "<?php echo $this->_tpl_vars['authorization']['access_token']; ?>
")
                <?php if ($this->_tpl_vars['authorization']['refresh_token']): ?>
                SUGAR.App.cache.set("<?php echo $this->_tpl_vars['appPrefix']; ?>
AuthRefreshToken", "<?php echo $this->_tpl_vars['authorization']['refresh_token']; ?>
")
                <?php endif; ?>
                if (window.SUGAR.App.config.siteUrl != '') {
                    history.replaceState(null, 'SugarCRM', window.SUGAR.App.config.siteUrl+"/"+window.location.hash)
                }
                <?php endif;  echo '
                App = SUGAR.App.init({
                    el: "#sidecar",
                    callback: function(app){
                        app.progress.set(0.6);
                        app.once("app:view:change", function(){
                            app.progress.done();
                        });
                        $(\'#alerts\').empty();
                        app.start();
                    }
                });
                App.api.debug = App.config.debugSugarApi;
            }
        </script>
        '; ?>


        <?php if (! empty ( $this->_tpl_vars['voodooFile'] )): ?>
            <script src="<?php echo smarty_function_sugar_getjspath(array('file' => $this->_tpl_vars['voodooFile']), $this);?>
"></script>
        <?php endif; ?>
    </body>
</html>