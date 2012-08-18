<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.plugin.plugin');

require_once(dirname(__FILE__).DS.'assets'.DS.'Pinyin.class.php');

class plgContentPinyinAlias extends JPlugin
{
	
    public function onContentBeforeSave($context, &$article, $isNew){    

       
		$alias2 = JFilterOutput::stringURLSafe($article->title);		

        if(trim(str_replace('-','',$alias2)) == '') :
            $datenow =& JFactory::getDate();
            $alias2 = $datenow->toFormat("%Y-%m-%d-%H-%M-%S");
        endif;
    				
		if($article->alias == $alias2):

            $codeTablesDir = dirname(__FILE__).DS."assets".DS."config".DS;
            // Replace post title
            $title = $article->title;
            $chs = new Chinese("UTF8","GB2312", $title,$codeTablesDir);
            $title = $chs->ConvertIT(); 
            $chs = new Chinese("GB2312","PinYin",$title,$codeTablesDir);
            $title = $chs->ConvertIT(); 
            $title = str_replace(" ","",$title);
			$article->alias = $title;
			$article->alias = JFilterOutput::stringURLSafe($article->alias);
        endif;

        return true;
    }

}

?>
