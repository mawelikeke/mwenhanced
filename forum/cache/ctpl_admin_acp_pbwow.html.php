<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<a name="maincontent"></a>

<h1><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h1>

<p><?php echo ((isset($this->_rootref['L_TITLE_EXPLAIN'])) ? $this->_rootref['L_TITLE_EXPLAIN'] : ((isset($user->lang['TITLE_EXPLAIN'])) ? $user->lang['TITLE_EXPLAIN'] : '{ TITLE_EXPLAIN }')); ?></p>

<?php if ($this->_rootref['S_ERROR']) {  ?>
	<div class="errorbox">
		<h3><?php echo ((isset($this->_rootref['L_WARNING'])) ? $this->_rootref['L_WARNING'] : ((isset($user->lang['WARNING'])) ? $user->lang['WARNING'] : '{ WARNING }')); ?></h3>
		<p><?php echo (isset($this->_rootref['ERROR_MSG'])) ? $this->_rootref['ERROR_MSG'] : ''; ?></p>
	</div>
<?php } if ($this->_rootref['S_VERSIONCHECK']) {  ?>
	<fieldset>
		<legend>PBWoW Database Check</legend>
		<?php if ($this->_rootref['S_CONSTANTSOKAY']) {  if ($this->_rootref['S_DBOKAY']) {  ?>
			<p style="font-weight: bold; color:#228822">PBWoW configuration table found (<?php echo (isset($this->_rootref['PBWOW_DBTABLE'])) ? $this->_rootref['PBWOW_DBTABLE'] : ''; ?>).</p>
			<?php } else { ?>
			<p style="font-weight: bold; color:#BC2A4D">No PBWoW configuration table found. Make sure that the table (<?php echo (isset($this->_rootref['PBWOW_DBTABLE'])) ? $this->_rootref['PBWOW_DBTABLE'] : ''; ?>) exists in your phpBB database.</p>
			<form id="acp_create_config_table" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
				<dl>
					<dt><label>Create PBWoW configuration table:</label>
					<br /><span>You haven&acute;t created a configuration table yet for your PBWoW installation. Either do so manually, or hit the &quot;Install&quot; button.</dt>
					<dd><br /><input type="hidden" name="action" value="create_config_table" /><input class="button2" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_INSTALL'])) ? $this->_rootref['L_INSTALL'] : ((isset($user->lang['INSTALL'])) ? $user->lang['INSTALL'] : '{ INSTALL }')); ?>" /></dd>
				</dl>
			</form>
			<?php } } else { ?>
		<p style="font-weight: bold; color:#BC2A4D">Constants not set. Add the following line to your includes/constants.php file:<br />
		define('PBWOW_CONFIG_TABLE', 		$table_prefix . 'pbwow_config');"</p>
		<?php } ?>
	</fieldset>

<?php if ($this->_rootref['S_DBOKAY']) {  ?>
	<fieldset>
		<legend>PBWoW Version Check</legend>
		<p style="font-weight: bold;"><?php echo (isset($this->_rootref['PBWOW_VERSION'])) ? $this->_rootref['PBWOW_VERSION'] : ''; ?></p>
		<p><small>Check <a href="http://pbwow.com/forum/index.php">PBWoW.com</a> to see if there are updates available.</small></p>
	</fieldset>

	<fieldset>
		<legend>Custom Profile Fields Check</legend>
		<dl>
			<dt><label>pbguild</label></dt>
			<dd><strong style="color:<?php if ($this->_rootref['S_CPF_PBGUILD']) {  ?>#228822">Active<?php } else { ?>#BC2A4D">Not active!<?php } ?></strong></dd>
		</dl>
		<dl>
			<dt><label>pblevel</label></dt>
			<dd><strong style="color:<?php if ($this->_rootref['S_CPF_PBLEVEL']) {  ?>#228822">Active<?php } else { ?>#BC2A4D">Not active!<?php } ?></strong></dd>
		</dl>
		<dl>
			<dt><label>pbrace</label></dt>
			<dd><strong style="color:<?php if ($this->_rootref['S_CPF_PBRACE']) {  ?>#228822">Active<?php } else { ?>#BC2A4D">Not active!<?php } ?></strong></dd>
		</dl>
		<dl>
			<dt><label>pbgender</label></dt>
			<dd><strong style="color:<?php if ($this->_rootref['S_CPF_PBGENDER']) {  ?>#228822">Active<?php } else { ?>#BC2A4D">Not active!<?php } ?></strong></dd>
		</dl>
		<dl>
			<dt><label>pbclass</label></dt>
			<dd><strong style="color:<?php if ($this->_rootref['S_CPF_PBCLASS']) {  ?>#228822">Active<?php } else { ?>#BC2A4D">Not active!<?php } ?></strong></dd>
		</dl>
		<dl>
			<dt><label>pbarmorycharlink</label></dt>
			<dd><strong style="color:<?php if ($this->_rootref['S_CPF_PBARMORYCHARLINK']) {  ?>#228822">Active<?php } else { ?>#BC2A4D">Not active!<?php } ?></strong></dd>
		</dl>		
		<dl>
			<dt><label>pbarmoryguildlink</label></dt>
			<dd><strong style="color:<?php if ($this->_rootref['S_CPF_PBARMORYGUILDLINK']) {  ?>#228822">Active<?php } else { ?>#BC2A4D">Not active!<?php } ?></strong></dd>
		</dl>
		<dl>
			<dt><label>pbrealm</label><small>no longer used</small></dt>
			<dd><strong><?php if ($this->_rootref['S_CPF_PBREALM']) {  ?>Active<?php } else { ?>Not active<?php } ?></strong></dd>
		</dl>
		<dl>
			<dt><label>pbpvprank</label><small>no longer used</small></dt>
			<dd><strong><?php if ($this->_rootref['S_CPF_PBPVPRANK']) {  ?>Active<?php } else { ?>Not active<?php } ?></strong></dd>
		</dl>		
	</fieldset>

	<fieldset>
		<legend>Special Rank Images on Viewforum Pages</legend>
		<?php if ($this->_rootref['S_TOPICS_MODDED']) {  ?>
		<form id="acp_refresh_topic_ranks" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
			<dl>
				<dt><label>Refresh special rank images:</label><br /><span>By clicking this button, special rank images of the topic starter will be refreshed for all topics in the database. These are used to display the rank image behind the user&acute;s name on viewforum pages.</dt>
				<dd><b>This process might take a while on big forums, so be patient.</b><br /><span style="color:#BC2A4D; font-weight:bold;">Only press this button once!</span><br /><br />
				<input type="hidden" name="action" value="refresh_topic_ranks" /><input class="button2" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_RUN'])) ? $this->_rootref['L_RUN'] : ((isset($user->lang['RUN'])) ? $user->lang['RUN'] : '{ RUN }')); ?>" /></dd>
			</dl>
		</form>
		<?php } else { ?>
		<form id="acp_create_topic_ranks" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
			<dl>
				<dt><label>Modify the database:</label><br /><span>You haven&acute;t modified your forum viewtopics table (<?php echo (isset($this->_rootref['TOPICS_TABLE'])) ? $this->_rootref['TOPICS_TABLE'] : ''; ?>) yet to support this feature. Luckily, this is automated (but only tested on MySQL). This button automatically ads the 2 needed columns (fields) to <?php echo (isset($this->_rootref['TOPICS_TABLE'])) ? $this->_rootref['TOPICS_TABLE'] : ''; ?>.</dt>
				<dd><span style="color:#BC2A4D; font-weight:bold;">Warning! This will make (small) changes to your database!</span><br /><br />
				<input type="hidden" name="action" value="create_topic_ranks" /><input class="button2" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_INSTALL'])) ? $this->_rootref['L_INSTALL'] : ((isset($user->lang['INSTALL'])) ? $user->lang['INSTALL'] : '{ INSTALL }')); ?>" /></dd>
			</dl>
		</form>
		<?php } ?>
	</fieldset>

	<fieldset>
		<legend>Refresh All Themes</legend>
		<form id="acp_refresh_all_themes" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
			<dl>
				<dt><label>Refresh all style themes in database:</label><br /><span>This button refreshes all the theme data for every style in the database with a single click. This is particularly handy when editing CSS of styles that use template inheritance and shared stylesheets (like PBWoW).<br /><b>This isn't the same as &quot;clearing the board cache&quot;!</b></dt>
				<dd><b>This process might take a while on big forums, so be patient.</b><br /><span style="color:#BC2A4D; font-weight:bold;">Only press this button once!</span><br /><br />
				<input type="hidden" name="action" value="refresh_all_themes" /><input class="button2" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_RUN'])) ? $this->_rootref['L_RUN'] : ((isset($user->lang['RUN'])) ? $user->lang['RUN'] : '{ RUN }')); ?>" /></dd>
			</dl>
		</form>
	</fieldset>
<?php } } if ($this->_rootref['S_DBOKAY']) {  ?>
<form id="acp_pbwow" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
<?php $_options_count = (isset($this->_tpldata['options'])) ? sizeof($this->_tpldata['options']) : 0;if ($_options_count) {for ($_options_i = 0; $_options_i < $_options_count; ++$_options_i){$_options_val = &$this->_tpldata['options'][$_options_i]; if ($_options_val['S_LEGEND']) {  if (! $_options_val['S_FIRST_ROW']) {  ?>
			</fieldset>
		<?php } ?>
		<fieldset>
			<legend><?php echo $_options_val['LEGEND']; ?></legend>
	<?php } else { ?>

		<dl>
			<dt><label for="<?php echo $_options_val['KEY']; ?>"><?php echo $_options_val['TITLE']; ?>:</label><?php if ($_options_val['S_EXPLAIN']) {  ?><br /><span><?php echo $_options_val['TITLE_EXPLAIN']; ?></span><?php } ?></dt>
			<dd><?php echo $_options_val['CONTENT']; ?></dd>
		</dl>

	<?php } }} if ($this->_rootref['S_AUTH']) {  $_auth_tpl_count = (isset($this->_tpldata['auth_tpl'])) ? sizeof($this->_tpldata['auth_tpl']) : 0;if ($_auth_tpl_count) {for ($_auth_tpl_i = 0; $_auth_tpl_i < $_auth_tpl_count; ++$_auth_tpl_i){$_auth_tpl_val = &$this->_tpldata['auth_tpl'][$_auth_tpl_i]; ?>
		<?php echo $_auth_tpl_val['TPL']; ?>
	<?php }} } if (! $this->_rootref['S_VERSIONCHECK']) {  ?>
	<p class="submit-buttons">
		<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;
		<input class="button2" type="reset" id="reset" name="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" />
	</p>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
<?php } ?>
	</fieldset>
</form>

<?php } $this->_tpl_include('overall_footer.html'); ?>