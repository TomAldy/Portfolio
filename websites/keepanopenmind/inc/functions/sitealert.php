<meta http-equiv="refresh" content="4; sitealert.php" />
<?php
include("config.php");
$squery = mysql_query("SELECT * FROM `sitealert` WHERE `id` = '1'");
$r=mysql_fetch_array($squery);
if($r['sitealert'] == '')
{
}else{
?>
<script type="text/javascript">
var m = "Message from KeepAnOpenMind Staff:\n";
m += "\n";
m += "<?php echo $r['sitealert']; ?>";
alert(m);
</script>
<?php
mysql_query("DELETE FROM `sitealert` WHERE `id` = '1'");
}
?>
