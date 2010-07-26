<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<div class="clear" style="height:55px"></div>
<div id="searchshell">
<div id="searchborder">
	<div>
		<div>
			<div>
				<div>
					<div class="padding">
	<div class="searchbox" style="height:60px">
		<div class="listbox">
			<ul>
				<li class="icon"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/arrow.gif" border="0" alt="<?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?>: <?php echo (isset($this->_rootref['SEARCH_TOPIC'])) ? $this->_rootref['SEARCH_TOPIC'] : ''; ?>" /></li>
				<li class="text" style="width:400px"><span><b><?php if ($this->_rootref['SEARCH_TOPIC']) {  ?><a href="<?php echo (isset($this->_rootref['U_SEARCH_TOPIC'])) ? $this->_rootref['U_SEARCH_TOPIC'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?>: <?php echo (isset($this->_rootref['SEARCH_TOPIC'])) ? $this->_rootref['SEARCH_TOPIC'] : ''; ?></a><?php } else { ?><a href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV'])) ? $this->_rootref['L_SEARCH_ADV'] : ((isset($user->lang['SEARCH_ADV'])) ? $user->lang['SEARCH_ADV'] : '{ SEARCH_ADV }')); ?>"><?php echo ((isset($this->_rootref['L_RETURN_TO_SEARCH_ADV'])) ? $this->_rootref['L_RETURN_TO_SEARCH_ADV'] : ((isset($user->lang['RETURN_TO_SEARCH_ADV'])) ? $user->lang['RETURN_TO_SEARCH_ADV'] : '{ RETURN_TO_SEARCH_ADV }')); ?></a><?php } ?><b></span>				
				</li>
			</ul>
			<?php if ($this->_rootref['SEARCH_IN_RESULTS']) {  ?>
			<form method="post" action="<?php echo (isset($this->_rootref['S_SEARCH_ACTION'])) ? $this->_rootref['S_SEARCH_ACTION'] : ''; ?>">
			<ul style="padding-top:5px">
				<li class="icon"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/search-text.gif" border="0" alt="Search" /></li>
				<li class="text"><span><b><?php echo ((isset($this->_rootref['L_SEARCH_IN_RESULTS'])) ? $this->_rootref['L_SEARCH_IN_RESULTS'] : ((isset($user->lang['SEARCH_IN_RESULTS'])) ? $user->lang['SEARCH_IN_RESULTS'] : '{ SEARCH_IN_RESULTS }')); ?>:</b></span>
				</li>
				
				<li><span><input type="text" name="add_keywords" id="add_keywords" size="40" value="<?php echo (isset($this->_rootref['SEARCH_WORDS'])) ? $this->_rootref['SEARCH_WORDS'] : ''; ?>" /></span>
				</li>
			</ul>
			<div style="position: relative; clear: both; width: 1px;"><input type="submit" name="submit" value="&nbsp;" style="position: absolute; top: -38px; left: 603px; background:url(<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/search-button.gif) no-repeat; height:42px; width:82px; border:none" /></div>
			</form>
			<?php } ?>
		</div>		
	</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>



<div id="cover" style="position:absolute; z-index:999999; top:0px; right:10px; width:300px; height:3000px; display:none; background-color:red;"></div>
<div id="topicheader">
	<div style="float: right;"> <a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/forum-index.gif" width="104" height="41" border="0" alt="" /></a> </div>
	<div id="topicview" style="margin-top: 14px;">
		<ul>
			<li><span title="Current time"><small><font color="white"><b>&nbsp;<?php if ($this->_rootref['SEARCH_TITLE']) {  echo (isset($this->_rootref['SEARCH_TITLE'])) ? $this->_rootref['SEARCH_TITLE'] : ''; } else { echo (isset($this->_rootref['SEARCH_MATCHES'])) ? $this->_rootref['SEARCH_MATCHES'] : ''; } ?></b><?php if ($this->_rootref['SEARCH_WORDS']) {  ?>: <a href="<?php echo (isset($this->_rootref['U_SEARCH_WORDS'])) ? $this->_rootref['U_SEARCH_WORDS'] : ''; ?>"><?php echo (isset($this->_rootref['SEARCH_WORDS'])) ? $this->_rootref['SEARCH_WORDS'] : ''; ?></a><?php } if ($this->_rootref['IGNORED_WORDS']) {  ?> | <?php echo ((isset($this->_rootref['L_IGNORED_TERMS'])) ? $this->_rootref['L_IGNORED_TERMS'] : ((isset($user->lang['IGNORED_TERMS'])) ? $user->lang['IGNORED_TERMS'] : '{ IGNORED_TERMS }')); ?>: <strong><?php echo (isset($this->_rootref['IGNORED_WORDS'])) ? $this->_rootref['IGNORED_WORDS'] : ''; ?></strong><?php } ?> | <?php echo (isset($this->_rootref['CURRENT_TIME_CLEAN'])) ? $this->_rootref['CURRENT_TIME_CLEAN'] : ''; ?>&nbsp;</font></small></span></li>
		</ul>
	</div>
</div>



<?php if (sizeof($this->_tpldata['searchresults'])) {  ?>

	<div id="paging">
		<div class="lpage">
			<?php if ($this->_rootref['PAGINATION'] || sizeof($this->_tpldata['searchresults']) || $this->_rootref['S_SELECT_SORT_KEY'] || $this->_rootref['S_SELECT_SORT_DAYS']) {  $this->_tpl_include('pbwow_pagination.html'); } ?>	
		</div>
	</div>

	<?php if ($this->_rootref['S_SHOW_TOPICS']) {  ?>

	<div id="postbackground">
		<div class="right">
			<table width="90%" border="0" cellpadding="0" cellspacing="0" class="tableoutline" style="margin: 0 auto;">
				<tr>
					<td class="tableheader">
						<table cellspacing="0" cellpadding="0" border="0">
							<tr>
								<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" border="0" width="1" height="22" alt="" /></td>
								<td style="padding: 0 0 0 5px;"><span> <a class="filter" href="#"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?></a></span></td>
							</tr>
						</table>
					</td>
					<td class="tableheader">
						<table cellspacing="0" cellpadding="0" border="0">
							<tr>
								<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" border="0" width="1" height="22" alt="" /></td>
								<td style="padding: 0 0 0 5px;"><span> <a class="filter" href="#"><?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?></a></span></td>
							</tr>
						</table>
					</td>
					<td align="center" class="tableheader"><span> <a class="filter" href="#"><?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?></a></span></td>
					<td align="center" class="tableheader"><span> <a class="filter" href="#"><?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?></a></span></td>
					<td align="center" class="tableheader"><span> <a class="filter" href="#"><?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?></a></span></td>
					<td align="center" class="tableheader"><span> <a class="filter" href="#"><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></a></span></td>
					<td class="tableheader">
						<table cellspacing="0" cellpadding="0" border="0">
							<tr>
								<td><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" border="0" width="1" height="22" alt="" /></td>
								<td style="padding: 0 0 0 5px;"><span> <a class="filter" href="#"><?php echo ((isset($this->_rootref['L_LAST_UPDATED'])) ? $this->_rootref['L_LAST_UPDATED'] : ((isset($user->lang['LAST_UPDATED'])) ? $user->lang['LAST_UPDATED'] : '{ LAST_UPDATED }')); ?></a></span></td>
							</tr>
						</table>
					</td>
				</tr>

				<?php $_searchresults_count = (isset($this->_tpldata['searchresults'])) ? sizeof($this->_tpldata['searchresults']) : 0;if ($_searchresults_count) {for ($_searchresults_i = 0; $_searchresults_i < $_searchresults_count; ++$_searchresults_i){$_searchresults_val = &$this->_tpldata['searchresults'][$_searchresults_i]; ?>
				<tr class="rows">
					<?php if (!($_searchresults_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta2">
					<?php } else { ?><td class="t2"><?php } if ($_searchresults_val['S_TOPIC_UNAPPROVED'] || $_searchresults_val['S_POSTS_UNAPPROVED'] || $_searchresults_val['S_TOPIC_REPORTED'] || $_searchresults_val['ATTACH_ICON_IMG']) {  ?>
							<div style="float:right; display:inline">
						<?php if ($_searchresults_val['S_TOPIC_UNAPPROVED'] || $_searchresults_val['S_POSTS_UNAPPROVED']) {  ?><a href="<?php echo $_searchresults_val['U_MCP_QUEUE']; ?>"><?php echo $_searchresults_val['UNAPPROVED_IMG']; ?></a>&nbsp;<?php } if ($_searchresults_val['S_TOPIC_REPORTED']) {  ?><a href="<?php echo $_searchresults_val['U_MCP_REPORT']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/biohazard-button.gif" border="0" /></a>&nbsp;<?php } if ($_searchresults_val['ATTACH_ICON_IMG']) {  ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/icon_topic_attach.gif" border="0" />&nbsp;<?php } ?>
							</div>	
						<?php } if ($_searchresults_val['S_UNREAD_TOPIC']) {  ?>
						<a href="<?php echo $_searchresults_val['U_NEWEST_POST']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/square-new.gif" width="15" height="15" style="vertical-align:middle;" border="0" alt="" /></a>
						<?php } else { ?>
						<a href="<?php echo $_searchresults_val['U_VIEW_TOPIC']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/square.gif" width="15" height="15" style="vertical-align:middle;" border="0" alt="" /></a>
						<?php } ?>
						<a href="<?php echo $_searchresults_val['U_VIEW_TOPIC']; ?>" class="active"><?php echo $_searchresults_val['TOPIC_TITLE']; ?></a>
						<?php if ($_searchresults_val['PAGINATION']) {  ?>
							<small>[Page: <?php echo $_searchresults_val['PAGINATION']; ?></small>] 
						<?php } ?>
					</td>
					<?php if (!($_searchresults_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta3"><?php } else { ?><td class="t3"><?php } if (! $_searchresults_val['S_TOPIC_GLOBAL']) {  ?><a href="<?php echo $_searchresults_val['U_VIEW_FORUM']; ?>"><?php echo $_searchresults_val['FORUM_TITLE']; ?></a><?php } else { ?> (<?php echo ((isset($this->_rootref['L_GLOBAL'])) ? $this->_rootref['L_GLOBAL'] : ((isset($user->lang['GLOBAL'])) ? $user->lang['GLOBAL'] : '{ GLOBAL }')); ?>)<?php } ?></td>
					<?php if (!($_searchresults_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta3" style="white-space:nowrap">
					<?php } else { ?><td class="t3" style="white-space:nowrap"><?php } if ($_searchresults_val['U_TOPIC_AUTHOR']) {  if ($_searchresults_val['TOPIC_AUTHOR_COLOUR']) {  ?><a href="<?php echo $_searchresults_val['U_TOPIC_AUTHOR']; ?>" style="text-decoration:none; color:<?php echo $_searchresults_val['TOPIC_AUTHOR_COLOUR']; ?>"><?php } else { ?><a href="<?php echo $_searchresults_val['U_TOPIC_AUTHOR']; ?>" style="text-decoration:none; color:#d7cea4"><?php } echo $_searchresults_val['TOPIC_AUTHOR']; ?></a><?php } else { echo $_searchresults_val['TOPIC_AUTHOR']; } if ($_searchresults_val['TOPIC_AUTHOR_RANK_IMG']) {  ?>&nbsp;<?php echo $_searchresults_val['TOPIC_AUTHOR_RANK_IMG']; ?>"<?php } ?></td>
					<?php if (!($_searchresults_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta4">
					<?php } else { ?><td class="t4"><?php } echo $_searchresults_val['TOPIC_REPLIES']; ?></td>
					<?php if (!($_searchresults_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta5">
					<?php } else { ?><td class="t5"><?php } echo $_searchresults_val['TOPIC_VIEWS']; ?></td>
					<?php if (!($_searchresults_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta6" style="white-space: nowrap">
					<?php } else { ?><td class="t6" style="white-space: nowrap" ><?php } echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?>&nbsp;<b><?php if ($_searchresults_val['U_LAST_POST_AUTHOR']) {  ?><a href="<?php echo $_searchresults_val['U_LAST_POST_AUTHOR']; ?>" style="text-decoration:none; color:#d7cea4"><?php echo $_searchresults_val['LAST_POST_AUTHOR']; ?></a><?php } else { echo $_searchresults_val['LAST_POST_AUTHOR']; } ?></b></td>
<?php if (!($_searchresults_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="ta6" style="white-space: nowrap">
					<?php } else { ?><td class="t6" style="white-space: nowrap" ><?php } if (! $this->_rootref['S_IS_BOT']) {  ?>&nbsp;<a href="<?php echo $_searchresults_val['U_LAST_POST']; ?>"><b><?php echo $_searchresults_val['LAST_POST_TIME']; ?></b></a><?php } ?></td>
				</tr>
				<?php }} ?>
			</table>
		</div>
	</div>

	<?php } else { ?>

	<script type="text/javascript">
	//<![CDATA[
	var objGlobal;
	var startContainerHeight=0;
	var topPadding=365;
	if(Browser.safari)
		topPadding=240;
	var topScrollLocation=0;
	
	function floater(){
		try{
		var scrollTopValue=document.documentElement.scrollTop;
		if(Browser.safari)
			scrollTopValue=document.body.scrollTop;
		var divHeight=document.getElementById("floatingContainer"+previousPost).offsetHeight;
		var browserHeight=document.documentElement.clientHeight;
			if(scrollTopValue>topPadding && divHeight<browserHeight){
				if((scrollTopValue+divHeight)<(document.body.offsetHeight-260))
					objGlobal.style.top=scrollTopValue-topPadding+"px";
			}else{
				objGlobal.style.top="0px";
			}
		}catch(err){ }
	}
	
	function init(){
		objGlobal = document.getElementById("floatingContainer2");
		window.onscroll=floater;
		switchPost(postIdArray[0])
	}
	
	function testFunc(){
		alert(objGlobal.style.top)
		objGlobal.style.top=200+"px";
	}
	
	var previousPost=0;
	var previousBg=1;
	
	function hilightPost(postId) {
		var obj;
		if(postId != previousPost && postId != 0){
			obj = document.getElementById("colorMod" + postId);
			obj.style.backgroundColor="#0D242D";
		}
	}
	
	function restorePost(postId) {
		var obj;
		if(postId != previousPost && postId != 0){
			obj = document.getElementById("colorMod" + postId);
			obj.style.backgroundColor="transparent";
		}
	}
	
	function switchPost(postId, linkId) {
		var obj;
		if (postId == previousPost) {
			document.location.href=linkId;
		}else{
			if(previousPost) {
				obj = document.getElementById("colorMod" + previousPost);
				// added to avoid javascript error for no search results
				if (obj == null) {
					return;
				}
				obj.style.backgroundColor="transparent";
				
				obj = document.getElementById("floatingContainer" + previousPost);
				obj.style.display="none";		
				
				obj = document.getElementById("searchArrow" + previousPost);
				obj.style.visibility="hidden";
				
				obj = document.getElementById("miniText" + previousPost);
				obj.innerHTML='<img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/button-preview-post.gif" border="0" alt="" />';
			}
	
			obj = document.getElementById("searchArrow" + postId);
			// added to avoid javascript error for no search results
			if (obj == null) {
				return;
			}
			obj.style.visibility="visible";
			obj = document.getElementById("floatingContainer" + postId);
			obj.style.display="block";
			obj = document.getElementById("colorMod" + postId);
			obj.style.backgroundColor="#063449";
			obj = document.getElementById("miniText" + postId);
			obj.innerHTML='<img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/button-jumpto-post.gif" border="0" alt="" />';
	
			var divHeight=document.getElementById("floatingContainer"+postId).offsetHeight;
	
			if(startContainerHeight==0)
				startContainerHeight = document.getElementById("searchbackground").offsetHeight;
			
			obj = document.getElementById("floatingContainer");
	
			if(!Browser.opera)
			if (divHeight > startContainerHeight){
				obj.style.height=divHeight+"px";
				obj = document.getElementById("searchbackground");
				obj.style.height=divHeight+"px";
			}else{
				obj.style.height=startContainerHeight+"px";
				obj = document.getElementById("searchbackground");
				obj.style.height=startContainerHeight+"px";			
			}
			
			//alert(obj.style.height)
			previousPost = postId;
			floater();
			//testFunc();
		}
	}
	
	function checkSearchField(){
		textSearch = document.searchForm.searchText.value;
		characterName = document.searchForm.characterName.value;
		return true;
	}
	//]]>
	</script>
	
	<script type="text/javascript">
	//<![CDATA[
		var postIdArray = new Array;
	//]]>
	</script>
	
	<style type="text/css">
		.breakWord { width:100%; overflow: hidden; word-wrap:break-word; }
	</style>


	<div id="searchcontainer">
		<table cellspacing="0" cellpadding="0" border="0" width="100%" style="min-width: 920px;">
			<tr>
				<td width="50%" valign="top"><!--[if IE]><div style="width: 450px;"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" /></div><![endif]-->
					<div style="position: relative; display: block; width: 100%;">
						<div style="margin: 0 auto; position: relative; width: 420px;">
							<div class="searchbanner"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/title-search-results.gif" style="position: absolute; top: 7px; left: 120px;" border="0" title="Search Results" alt="search-results" /> </div>
						</div>
					</div>
					<div id="searchbackground">
						<div class="right">
							<!--[if IE]><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" alt="" width="1" height="240" align="left" /><![endif]-->
	
	
							<?php $_searchresults_count = (isset($this->_tpldata['searchresults'])) ? sizeof($this->_tpldata['searchresults']) : 0;if ($_searchresults_count) {for ($_searchresults_i = 0; $_searchresults_i < $_searchresults_count; ++$_searchresults_i){$_searchresults_val = &$this->_tpldata['searchresults'][$_searchresults_i]; ?>
	
							<script type="text/javascript">
							//<![CDATA[
							postIdArray[<?php echo $_searchresults_val['S_ROW_COUNT']; ?>]="<?php echo $_searchresults_val['POST_ID']; ?>";
							//]]>
							</script>
							<a name="<?php echo $_searchresults_val['POST_ID']; ?>"></a>
							<div id="postshell<?php if (($_searchresults_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>1" style="cursor: pointer;" onClick="javascript:switchPost('<?php echo $_searchresults_val['POST_ID']; ?>','<?php echo $_searchresults_val['U_VIEW_POST']; ?>')" onMouseOver="javascript:hilightPost('<?php echo $_searchresults_val['POST_ID']; ?>')" onMouseOut="javascript:restorePost('<?php echo $_searchresults_val['POST_ID']; ?>')">
								<div class="resultbox">
									<div class="postdisplay">
										<div class="innerborder">
											<div class="postingcontainer<?php if (($_searchresults_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>1">
												<div class="insert">
													<div id="resultsContainer">
														<div class="resultbox">
															<!-- search results container -->
															<div class="post<?php if (($_searchresults_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>">
																<div class="postf<?php if (($_searchresults_val['S_ROW_COUNT'] & 1)  ) {  ?>2<?php } else { ?>1<?php } ?>">
																	<div class="floatRight">
																		<div id="miniText<?php echo $_searchresults_val['POST_ID']; ?>" class="miniText"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/button-preview-post.gif" border="0" alt="" /> </div>
																		<div class="searchArrow" id="searchArrow<?php echo $_searchresults_val['POST_ID']; ?>"></div>
																		<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/arrow.gif" border="0" alt="" style="position:relative; top:7px;" /> </div>
																	<div id="colorMod<?php echo $_searchresults_val['POST_ID']; ?>" class="excerptPadd">
																		<div class="breakWord">
																			<ul>
																				<li><span><a href="javascript:switchPost('<?php echo $_searchresults_val['POST_ID']; ?>','<?php echo $_searchresults_val['U_VIEW_POST']; ?>')"><?php echo $_searchresults_val['POST_SUBJECT']; ?></a></span><br />
																					<span class="blue" style="font-size:11px;"><?php echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); ?> <?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <b><?php echo $_searchresults_val['POST_AUTHOR']; ?></b> &raquo; <?php echo $_searchresults_val['POST_DATE']; ?></span> </li>
																				<li class="summary"><span><i><?php if ($_searchresults_val['S_IGNORE_POST']) {  echo $_searchresults_val['L_IGNORE_POST']; } if ($_searchresults_val['S_POST_REPORTED']) {  ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/biohazard-button.gif" border="0" /><?php } echo $_searchresults_val['MESSAGE']; ?></i></span> </li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- end search results container -->
													</div>
						<div style="clear:both">
							<!---->
						</div>
												</div>
												<!-- end insert -->
											</div>
											<!-- end innercontainer -->
										</div>
										<!-- end border -->
									</div>
									<!-- end postdisplay -->
								</div>
								<!-- end resultbox -->
							</div>
							<!-- End div postshell --><?php }} ?>

	
						</div>
					</div>
				</td>
				<td width="50%" valign="top" class="displaybox"><!--[if IE]><div style="width: 450px;"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" /></div><![endif]-->
					<div style="position: relative; z-index: 999999999; width: 100%;">
						<div style="margin: 0 auto; position: relative; width: 420px;">
							<div class="postpreview">
								<img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/title-post-preview.gif" style="position: absolute; top: 7px; left: 128px;" border="0" title="Post Preview" alt="post-preview" /> 
							</div>
						</div>
					</div>
					<div id="floatingContainer">
						<div id="floatingContainer2">
	
	
							<?php $_searchresults_count = (isset($this->_tpldata['searchresults'])) ? sizeof($this->_tpldata['searchresults']) : 0;if ($_searchresults_count) {for ($_searchresults_i = 0; $_searchresults_i < $_searchresults_count; ++$_searchresults_i){$_searchresults_val = &$this->_tpldata['searchresults'][$_searchresults_i]; ?>
	
							<a name="<?php echo $_searchresults_val['POST_ID']; ?>"></a>
							<div id="floatingContainer<?php echo $_searchresults_val['POST_ID']; ?>" style="display:none;">
								<div class="resultbox">
									<div class="postdisplay">
										<div class="innerborder">
											<div class="innercontainer">
												<div class="secondcontainer">
													<div class="breakWord">
														<div style="float: right; width:0px; height:0px; margin:0; padding:0">
															<div style="position: relative; width:0px; height:0px;"><a href="<?php echo $_searchresults_val['U_VIEW_POST']; ?>" class="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/button-jumptopost.gif" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_POST'])) ? $this->_rootref['L_JUMP_TO_POST'] : ((isset($user->lang['JUMP_TO_POST'])) ? $user->lang['JUMP_TO_POST'] : '{ JUMP_TO_POST }')); ?>" style="position:absolute; top:2px; right:4px;" border="0" alt="<?php echo ((isset($this->_rootref['L_JUMP_TO_POST'])) ? $this->_rootref['L_JUMP_TO_POST'] : ((isset($user->lang['JUMP_TO_POST'])) ? $user->lang['JUMP_TO_POST'] : '{ JUMP_TO_POST }')); ?>" /></a></div>
														</div>
														<ul>
															<li class="postavatar">
																<div id="avatar" style="width: 85px;">
																	<div class="shell">
																		<?php if ($_searchresults_val['POSTER_AVATAR_SRC']) {  ?>
																		<table cellspacing="0" cellpadding="0" border="0">
																			<tr>
																				<td style="background: url('<?php echo $_searchresults_val['POSTER_AVATAR_SRC']; ?>') no-repeat; width: 64px; height: 64px;"></td>
																			</tr>
																		</table>
																		<div class="frame">
																		<?php } else if ($_searchresults_val['S_PROFILE_PBRACE']) {  ?><!-- Generate avatar based on custom profile fields -->
																		<table cellspacing="0" cellpadding="0" border="0">
																			<tr>
																				<td style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/portraits/<?php if ($_searchresults_val['S_PROFILE_PBLEVEL']) {  if ($_searchresults_val['PROFILE_PBLEVEL_VALUE'] > (79)) {  ?>wow-80<?php } else if ($_searchresults_val['PROFILE_PBLEVEL_VALUE'] > (69)) {  ?>wow-70<?php } else if ($_searchresults_val['PROFILE_PBLEVEL_VALUE'] > (59)) {  ?>wow<?php } else { ?>wow-default<?php } } else { ?>wow-default<?php } ?>/<?php if ($_searchresults_val['S_PROFILE_PBGENDER']) {  echo $_searchresults_val['PROFILE_PBGENDER_ID']; } else { ?>0<?php } ?>-<?php echo $_searchresults_val['PROFILE_PBRACE_ID']; ?>-<?php if ($_searchresults_val['S_PROFILE_PBCLASS']) {  echo $_searchresults_val['PROFILE_PBCLASS_ID']; } else { ?>1<?php } ?>.gif') no-repeat; width: 64px; height: 64px;"></td>
																			</tr>
																		</table>
																		<!-- / Generate avatar based on custom profile fields -->
																		<div class="frame">
																		<?php } else { if ($_searchresults_val['U_POST_AUTHOR']) {  ?>
																			<table cellspacing="0" cellpadding="0" border="0">
																				<tr>
																					<td style="background: none; width: 64px; height: 64px;"></td>
																				</tr>
																			</table>
																			<div class="frame-no-char">
																			<?php } else { ?>
																			<table cellspacing="0" cellpadding="0" border="0">
																				<tr>
																					<td style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/avatar.jpg') no-repeat; width: 64px; height: 64px;"></td>
																				</tr>
																			</table>
																			<div class="frame">
																			<?php } } if ($_searchresults_val['U_POST_AUTHOR']) {  ?><a href="<?php echo $_searchresults_val['U_POST_AUTHOR']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" width="82" height="83" border="0" alt="" /></a>
																		<?php } else { ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" width="82" height="83" border="0" alt="" />
																		<?php } ?>
																		</div>
																	</div>

																	<div style="position: relative;">
																		<?php if ($_searchresults_val['POSTER_AVATAR_SRC'] || $_searchresults_val['S_PROFILE_PBRACE']) {  ?>
																		<div class="iconPosition" style="right: 4px;_right: 1px;">
																			<?php if ($_searchresults_val['SPECIAL_RANK_IMG']) {  echo $_searchresults_val['SPECIAL_RANK_IMG']; } else if ($_searchresults_val['S_PROFILE_PBLEVEL'] && $_searchresults_val['PROFILE_PBLEVEL_VALUE'] != 0) {  ?><b><small><?php echo $_searchresults_val['PROFILE_PBLEVEL_VALUE']; ?></small></b><?php } else if (! $_searchresults_val['S_PROFILE_PBRACE'] && $_searchresults_val['U_POST_AUTHOR'] && $_searchresults_val['RANK_IMG']) {  echo $_searchresults_val['RANK_IMG']; } else { ?><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/question.gif" alt="" /><?php } ?>
																		</div>
																		<?php } else if (! $_searchresults_val['U_POST_AUTHOR']) {  ?>
																		<div class="iconPosition">
																			<img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/x_custom/question.gif" alt="" />
																		</div>
																		<?php } if ($_searchresults_val['S_PROFILE_PBRACE']) {  ?>
																		<div id="iconpanelhide11">
																			<div id="search-iconpanel"></div>
																			<div id="search-icon-panel">
																			<!-- Character icons --><?php if ($_searchresults_val['S_PROFILE_PBRACE']) {  if ($_searchresults_val['S_PROFILE_PBGENDER']) {  ?>
																					<div class="player-icons-race" style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon/race/<?php echo $_searchresults_val['PROFILE_PBRACE_ID']; ?>-<?php echo $_searchresults_val['PROFILE_PBGENDER_ID']; ?>.gif') no-repeat;"> <img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" height="18" width="18" alt="" /> </div>
																					<?php } else { ?>
																					<div class="player-icons-race" style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon/race/<?php echo $_searchresults_val['PROFILE_PBRACE_ID']; ?>-0.gif') no-repeat;"> <img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" height="18" width="18" alt="" /> </div>
																					<?php } } if ($_searchresults_val['S_PROFILE_PBCLASS']) {  ?>
																					<div class="player-icons-class" style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon/class/<?php echo $_searchresults_val['PROFILE_PBCLASS_ID']; ?>.gif') no-repeat;"><?php if ($_searchresults_val['S_PROFILE_PBARMORYCHARLINK']) {  ?><a href="<?php echo $_searchresults_val['PROFILE_PBARMORYCHARLINK_VALUE']; ?>" target="_blank"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon/icon-active.png" alt="" class="png" border="0" height="18" width="18" /></a><?php } else { ?><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/pixel.gif" height="18" width="18" alt="" /><?php } ?></div>
																				<?php } if ($_searchresults_val['RANK_IMG']) {  ?>
																					<div class="player-icons-pvprank" style="background: url('<?php echo $_searchresults_val['RANK_IMG_SRC']; ?>') no-repeat;" title="<?php echo $_searchresults_val['RANK_TITLE']; ?>"></div>
																				<?php } else { if ($_searchresults_val['PROFILE_PBRACE_ID'] == (1) || $_searchresults_val['PROFILE_PBRACE_ID'] == (3) || $_searchresults_val['PROFILE_PBRACE_ID'] == (4) || $_searchresults_val['PROFILE_PBRACE_ID'] == (7) || $_searchresults_val['PROFILE_PBRACE_ID'] == (11)) {  ?>
																						<div class="player-icons-pvprank" style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon/pvpranks/rank_default_0.gif') no-repeat;"></div>
																					<?php } else { ?>
																						<div class="player-icons-pvprank" style="background: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icon/pvpranks/rank_default_1.gif') no-repeat;"></div>
																					<?php } } ?><!-- / Character icons -->
																			</div>
																		</div>
																		<?php } ?>
																	</div>
																</div>
															</li>
															<li class = "userdata"><span> <a href="<?php echo $_searchresults_val['U_VIEW_POST']; ?>"><?php echo $_searchresults_val['POST_SUBJECT']; ?></a><br/>
																<?php echo $_searchresults_val['POST_DATE']; ?></span><br />
																<span><b><?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <span style="color:#FFAC04;"><?php echo $_searchresults_val['POST_AUTHOR_FULL']; ?></span>
																 <!--<a href="#"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/icons/search.gif" style="vertical-align: middle;" width="17" height="21" border="0" alt="search" /></a>--></b><br />
																<?php if ($_searchresults_val['S_PROFILE_PBGUILD']) {  ?><small>Guild:&nbsp;</small> 
																<small><b><?php echo $_searchresults_val['PROFILE_PBGUILD_VALUE']; ?></b></small><br />
																<?php } if ($_searchresults_val['FORUM_TITLE']) {  ?><small><?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>:&nbsp;</small> 
																<small><b><a href="<?php echo $_searchresults_val['U_VIEW_FORUM']; ?>"><?php echo $_searchresults_val['FORUM_TITLE']; ?></a></b></small>
																<?php } ?>
																</span>
															</li>
														</ul>
														<ul>
															<li class="summary">
																<div id="messagepanel">
																	<div class="message-body"> <img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/search-text-bubble.gif" border="0" alt="" style="position: absolute; top: -15px; _top: -14px; left: 120px; _left: 115px;" />
																		<div class="message-format">

																			<?php if ($_searchresults_val['RANK_BLIZZ'] && $this->_rootref['S_PBWOW_BLIZZ_RANKS']) {  ?>
																			<span class="pbwow-admin-fix" style="color:<?php echo $_searchresults_val['POST_AUTHOR_COLOUR']; ?>">
																			<?php } else { ?>
																			<span style="color:<?php echo $_searchresults_val['POST_AUTHOR_COLOUR']; ?>">
																			<?php } ?>
																				<?php echo $_searchresults_val['MESSAGE_FULL']; ?>
																			</span>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
														<?php if ($_searchresults_val['FORUM_TITLE']) {  ?>
															<!--<?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>: <a href="<?php echo $_searchresults_val['U_VIEW_FORUM']; ?>"><?php echo $_searchresults_val['FORUM_TITLE']; ?></a>-->
														<?php } ?>
													</div>
													<!-- end break -->
												</div>
												<!-- end secondcontainer -->
											</div>
											<!-- end innercontainer -->
										</div>
										<!-- end border -->
									</div>
									<!-- end postdisplay -->
								</div>
								<!-- end resultbox -->
							</div>
							
							<?php }} ?>
	
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
	
	<?php } ?>

	<div class="theader">
		<div class="lpage">
			<?php if ($this->_rootref['PAGINATION'] || sizeof($this->_tpldata['searchresults']) || $this->_rootref['S_SELECT_SORT_KEY'] || $this->_rootref['S_SELECT_SORT_DAYS']) {  $this->_tpl_include('pbwow_pagination.html'); } ?>	
		</div>
		<div class="rpage" style="width:500px">
			<ul>
				<li>
				<?php if ($this->_rootref['S_SELECT_SORT_DAYS'] || $this->_rootref['S_SELECT_SORT_KEY']) {  ?>
					<form method="post" action="<?php echo (isset($this->_rootref['S_SEARCH_ACTION'])) ? $this->_rootref['S_SEARCH_ACTION'] : ''; ?>">
						<?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?> <?php if ($this->_rootref['S_SELECT_SORT_KEY']) {  echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; } ?> <input type="submit" name="sort" value="&nbsp;" style="height:19px; width:21px; background:url(<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/jump-button.gif) no-repeat; border:none; cursor:pointer" />
						<!--<?php echo ((isset($this->_rootref['L_DISPLAY_TOPICS'])) ? $this->_rootref['L_DISPLAY_TOPICS'] : ((isset($user->lang['DISPLAY_TOPICS'])) ? $user->lang['DISPLAY_TOPICS'] : '{ DISPLAY_TOPICS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?>-->
					</form>
				<?php } ?>
				</li>
				<li style="margin: 3px 2px 0 3px;"><span><b><?php if ($this->_rootref['S_SELECT_SORT_DAYS'] || $this->_rootref['S_SELECT_SORT_KEY']) {  if ($this->_rootref['S_SHOW_TOPICS']) {  echo ((isset($this->_rootref['L_DISPLAY_POSTS'])) ? $this->_rootref['L_DISPLAY_POSTS'] : ((isset($user->lang['DISPLAY_POSTS'])) ? $user->lang['DISPLAY_POSTS'] : '{ DISPLAY_POSTS }')); } else { echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); } ?>:&nbsp;<?php } ?></b></span></li>
			</ul>
		</div>
	</div>


<?php } else { ?>


<div style="clear: both;"></div>
<div id="postbackground">
	<div class="right">
		<div class="search-dialogue">
			<span><strong><?php echo ((isset($this->_rootref['L_NO_SEARCH_RESULTS'])) ? $this->_rootref['L_NO_SEARCH_RESULTS'] : ((isset($user->lang['NO_SEARCH_RESULTS'])) ? $user->lang['NO_SEARCH_RESULTS'] : '{ NO_SEARCH_RESULTS }')); ?></strong></span>
		</div>
	</div>
</div>


<?php } ?>


</div>
<div class="forum-index">
	<div class="findex"> <a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_LANG_PATH'])) ? $this->_rootref['T_IMAGESET_LANG_PATH'] : ''; ?>/forum-index.gif" width="104" height="41" border="0" title="" alt="" /></a> </div>
</div>
<div style="width: 100%; height: 20px;"></div>
<br clear="all" />

<?php $this->_tpl_include('overall_footer.html'); ?>