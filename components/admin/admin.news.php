<?php
if(INCLUDED!==true)exit;
// ==================== //
if($_GET['action'] == 'add') { $pathway_info[] = array('title'=>'Add News', 'link'=>'index.php?n=admin&sub=news&action=add'); }
elseif($_GET['action'] == 'edit') { $pathway_info[] = array('title'=>'Edit News', 'link'=>'index.php?n=admin&sub=news&action=edit'); }
else{ $pathway_info[] = array('title'=>'News', 'link'=>'index.php?n=admin&sub=news&action=edit'); }
// ==================== //
$df = 1;
$zz = $user['id'];
$post_time = time();
$maxtopic_id = $DB->selectCell("SELECT MAX(topic_id) FROM `f_posts`");
if(!$maxtopic_id) {
	$topic_id = 1;
}else{
$topic_id = ($maxtopic_id + 1);
}
// If posting a new News post
    if($_POST['message']){
		$message = my_preview($_POST['message']);
        $new_topic_id = $DB->query("INSERT INTO f_topics (topic_poster_id,topic_poster,topic_name,topic_posted,forum_id) VALUES (?,?,?,?d,?d)",
                $user['id'],$user['username'],htmlspecialchars($_POST['title']),$post_time,$df);
            
            $new_post_id = $DB->query("INSERT INTO f_posts (poster,poster_id,poster_character_id,poster_ip,message,posted,topic_id) VALUES (?,?d,?d,?,?,?d,?d)",
                $user['username'],$user['id'],$zz,$user['ip'],$message,$post_time,$topic_id);
            
            $DB->query("UPDATE account_extend SET forum_posts=forum_posts+1 WHERE account_id=?d",$user['id']);
                    
            $DB->query("UPDATE f_topics SET last_post=?d, last_post_id=?d, last_poster=? WHERE topic_id=?d",
                $post_time,$new_post_id,$user['username'],$topic_id);
            
            $DB->query("UPDATE f_forums SET num_topics=num_topics+1, num_posts=num_posts+1,last_topic_id=?d WHERE forum_id=?d",
                $topic_id,$df);
    }
// If editing news
	if($_POST['edit_message']) {
		if($_POST['delete']) {
			$DB->query("DELETE FROM f_posts WHERE topic_id=?d",$_POST['id']);
			$DB->query("DELETE FROM f_topics WHERE topic_id=?d LIMIT 1",$_POST['id']);
			$DB->query("UPDATE f_forums SET num_topics=num_topics-1, last_topic_id=?d WHERE forum_id=?d",
				$_POST['id'],$df);
			redirect($MW->getConfig->temp->site_href."index.php?n=admin&sub=news&action=edit",1);
		}else{
			$message = my_preview($_POST['edit_message']);
			$DB->query("UPDATE f_posts SET message=?, edited=?d, edited_by=? WHERE post_id=?d",$message,$post_time,$user['character_name'],$_GET['id']);
		}
	}
?>