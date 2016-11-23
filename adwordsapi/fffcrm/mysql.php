<?
class mysql {
	function connect($host,$db,$user,$pass) {
		$tt=mysql_connect($host,$user,$pass) or die(mysql_error());
		mysql_select_db($db,$tt) or die(mysql_error());
		mysql_set_charset('utf8',$tt);

		return true;
	}

	function query($query){
		$rs = @mysql_query($query) or die(mysql_error());
		return $rs;
	}
	function fetch_array($rs){ 
		return @mysql_fetch_array($rs);
	}
	function fetch_row($rs){ 
		return @mysql_fetch_row($rs);
	}
	function count_rows($query){
		$rs= @mysql_query($query) or die (mysql_error());
		return @mysql_num_rows($rs);
	}
	function num_rows($rs){
		return @mysql_num_rows($rs);
	}
	function one_row($query){
		$rs = @mysql_query($query);
		$result = @mysql_fetch_array($rs);
		@mysql_free_result($rs);
		return $result;
	}
	function insert_id() {
		return @mysql_insert_id();
	}
	function noempty($v) {
		return is_int($v) or $v=='0' or !empty($v);
	}
	function insert($table, $row, $refix='db_', $insert_null=true) {
		if(!is_array($row) or count($row)==0 ) return null;
		$cols = $vals = '';
		foreach($row as $name=>$value) {
			if( substr($name,0,3)==$refix
				and strlen($name)>3
				and ($insert_null or mysql::noempty($value)) ) {
				$cols .= '`'.substr($name,3).'`,';
				if(mysql::noempty($value) ) $vals .= "'$value',";
				else $vals .= "NULL,"; 
			}
		}
		if( strlen($cols)>0 and strlen($vals)>0 ) {
			$cols = substr($cols,0,strlen($cols)-1);
			$vals = substr($vals,0,strlen($vals)-1);
			$query = "INSERT INTO `$table` ($cols) VALUES ($vals)";
			@mysql_query($query) or die(error::sql('Insert row error'));
			return @mysql_insert_id();
		}
		return null;
	}
	
	function insert_debug($table, $row, $refix='db_', $insert_null=true) {
		var_dump($row);
		if(!is_array($row) or count($row)==0 ) return error::sql_report('Insert fail - No field found');
		$cols = $vals = '';
		foreach($row as $name=>$value) {
			if( substr($name,0,3)==$refix
				and strlen($name)>3
				and ($insert_null or mysql::noempty($value)) ) {
				$cols .= '`'.substr($name,3).'`,';
				if(mysql::noempty($value)) $vals .= "'$value',";
				else $vals .= "NULL,"; 
			}
		}
		if( strlen($cols)>0 and strlen($vals)>0 ) {
			$cols = substr($cols,0,strlen($cols)-1);
			$vals = substr($vals,0,strlen($vals)-1);
			echo $query = "INSERT INTO `$table` ($cols) VALUES ($vals)";
			@mysql_query($query) or error::sql_report('Insert row error');
			return @mysql_insert_id();
		} else error::sql_report('Insert fail - No valid field found');
		return null;
	}
	
	function update($table, $id, $row, $refix='db_', $update_null=false) {
		if(!is_array($row) or count($row)<2 or !isset($row[$refix.$id])) return false;
		$update = $id_val = '';
		foreach($row as $name=>$value) {
			$name=trim($name);
			if( substr($name,0,3)==$refix
				and strlen($name)>3
				and ($update_null or mysql::noempty($value)) ) {
				$col = substr($name,3);
				if($col==$id) $id_val=$value;
				else {
					$update .= '`'.substr($name,3).'`=';
					if(mysql::noempty($value)) $update .= "'$value',";
					else $update .= "NULL,"; 
				}
			}
		}
		if(strlen($update)>0) {
			$update = substr($update,0,strlen($update)-1);
			$query = "UPDATE `$table` SET $update WHERE `$id`='$id_val'";
			return @mysql_query($query) or die(error::sql('Update row error'));
		}
		return false;
	}
	
	function update_debug($table, $id, $row, $refix='db_', $update_null=false) {
		var_dump($row);
		if(!is_array($row) or count($row)<2) return error::sql_report('Update fail - No field found');
		if(!isset($row[$refix.$id]) ) return error::sql_report('Update fail - No ID field specified');
		$update = $id_val = '';
		foreach($row as $name=>$value) {
			$name=trim($name);
			if( substr($name,0,3)==$refix
				and strlen($name)>3
				and ($update_null or mysql::noempty($value)) ) {
				$col = substr($name,3);
				if($col==$id) $id_val=$value;
				else {
					$update .= '`'.substr($name,3).'`=';
					if(mysql::noempty($value)) $update .= "'$value',";
					else $update .= "NULL,"; 
				}
			}
		}
		if(strlen($update)>0) {
			$update = substr($update,0,strlen($update)-1);
			echo $query = "UPDATE `$table` SET $update WHERE `$id`='$id_val'";
			return @mysql_query($query) or error::sql_report('Update row error');
		} else error::sql_report('Update fail - No valid field found');
		return false;
	}
	
	function loadresult($query) {
		$rs = mysql::one_row($query);
		return $rs[0];
	}
	function loadiresult($query) {
		$rs = mysql::one_row($query);
		return intval($rs[0]);
	}
	function loadaresult($query) {
		$rs = mysql::query($query);
		$rt=array();
		while($row=mysql::fetch_row($rs)) $rt[]=$row[0];
		@mysql_free_result($rs);
		return $rt;
	}
	function loadarray($query) {
		$rs = mysql::query($query);
		$rt=array();
		while($row=mysql::fetch_array($rs)) $rt[]=$row;
		@mysql_free_result($rs);
		return $rt;
	}
	function loadmap($query) {
		$rs = mysql::query($query);
		$rt=array();
		while($row=mysql::fetch_row($rs)) $rt[$row[0]]=$row[1];
		@mysql_free_result($rs);
		return $rt;
	}
	function free($rs) { @mysql_free_result($rs); }
}
$mysql = new mysql();
$mysql->connect($DB_HOST,$DB_NAME,$DB_USER,$DB_PASS);
?>