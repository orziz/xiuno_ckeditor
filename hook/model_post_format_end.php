include_once 'plugin/ph_ckeditor/Parser.php';
//$parser = new Parser();
include_once 'plugin/ph_ckeditor/parser/Parsedown.php';
include_once 'plugin/ph_ckeditor/parser/ParsedownExtra.php';
include_once 'plugin/ph_ckeditor/purifier/HTMLPurifier.standalone.php';
//$Parsedown = new Parsedown();

$Extra = new ParsedownExtra();
$config= HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);

if($post['doctype'] == 2){
    
    if ($post['message_cache']==''){                                                                            //空缓存
        $post['message_cache']=$purifier->purify($Extra->text($post['message']));
        //$post['message_cache']= $parser->makeHtml($post['message']);                                //过滤并储存
        db_update('post', array('pid'=>$post['pid']), array('message_cache'=>$post['message_cache']));        //写入数据库
    }
    
    $post['message_fmt'] = "<div class='markdown-body'>".$post['message_cache']."</div>";
}