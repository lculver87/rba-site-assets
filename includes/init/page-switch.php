<?php

$page=@$_GET['page'];

$page_body='template/pages/index/index.php';

//switch the page
switch($page){
    case 'about':
        $page_body='template/pages/about/index.php';
        $page_title='About Us |';
        break;
    case 'exhibitions':
        $page_body='template/pages/exhibitions/index.php';
        $page_title='Exhibitions |';
        break;
    case 'contact':
        $page_body='template/pages/contact/index.php';
        $page_title='Contact Us |';
        break;
    case 'news':
        $page_body='template/pages/news/index.php';
        $page_title='News |';
        break;
    case 'rome-scholarship':
        $page_body='template/pages/rome-scholarship/index.php';
        $page_title='Rome Scholarship and Rising Stars |';
        break;
    case 'members':
        $page_body='template/pages/members/index.php';
        $page_title='Members |';
        break;
    default:
        $page_body='template/pages/index/index.php';
        $page_title='';
        break;
    
}

$page_title.=' Royal Society of British Artists';

?>