<?php
header('content-type: text/css');
require('../includes/bdd.class.php');
if (isset($_GET['uid'])) {
	?>
body{
  padding:0;
  height: 100%;
  line-height:100%;
  text-align:center;
  background: url('<?php echo getbackgroundFromID($_GET['uid']); ?>') no-repeat center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#header{
  text-align:left;
}
#content{
  border:1px solid #fff;
  vertical-align:middle;
  display:inline-block;
  line-height:1.2;
  text-align:left;
  height: 100%;
  padding-top:10px;
  padding-bottom:20px;
  background-color: white;
  filter:alpha(opacity=80);
}
#abonement{
 padding-bottom:10px;
}
#head{
  display:block;
}
#img{
padding-right: 20px;
display:inline-block;
width:80px;
height:80px;
float:left;
}
#pseudo{
  display:inline-block;
  width:300px;
  float:left;
}
/*
#foot{
  position: absolute;
  bottom: 1px;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
  text-align: left;
}
#foot h4{
    background-color: white;
    opacity:0.8;
    filter:alpha(opacity=80);
}
*/
#foot{
  display: none;
}
<?php
}
function getbackgroundFromID($userId) {
	$db = new BDD();
	$res = $db->select('background', 'users',  'WHERE id='.$userId.'');
	$tmp = '';
	$row = $db->fetch_array($res);
	$tmp = $row['background'];
 	$out = "../".$tmp;
	return $out;  
}
?>
