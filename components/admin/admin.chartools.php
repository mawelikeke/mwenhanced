<?php
if(INCLUDED!==true)exit;
// ==================== //
$pathway_info[] = array('title'=>'Character Tools', 'link'=>'index.php?n=admin&sub=chartools');
// ==================== //

function check_if_online($name, $CHDB)
{
	global $CHDB, $name;
	$check_status = $CHDB->query("SELECT `online` FROM `characters` WHERE `name` LIKE '$name'");
	if (count($check_status) <> 0)
	{
		foreach ($check_status as $row);
		$status=$row['online'];
		if ($status == 1)
			return 1;
		else
			return 0;
	}else
		return -1;
}
function check_if_name_exist($newname, $CHDB)
{
	global $CHDB, $newname;
    $check_exist = $CHDB->selectcell("SELECT * FROM `characters` WHERE `name` LIKE '$newname'");
    if (count($check_exist) == 0) {
        return 0;
    }
    return 1;
}
function change_name($name,$newname, $CHDB, $DB)
{
	global $CHDB, $DB, $name;
	$CHDB->query("UPDATE `characters` SET `name`= '$newname' WHERE `name` LIKE '$name'"); 
}
?>
