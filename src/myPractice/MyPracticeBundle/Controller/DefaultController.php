<?php

namespace myPractice\MyPracticeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    public function indexAction()
    {
		//Get all Symfony Repositories hosted on GitHub
		//$client 				= new \Github\Client();
		//$arrRepos	 			= $client->api('repo')->find('symfony');
		
		$arrSymfonyRepos 		= array();
		/*if(!empty($arrRepos['repositories'])){
			$arrSymfonyRepos 	= $arrRepos['repositories'];
		}*/
		
		$arrSymfonyRepos[0]['name'] = 'test1';
		$arrSymfonyRepos[0]['description'] = 'testing1';
		$arrSymfonyRepos[0]['url'] = 'http://google.com';
		
		$arrSymfonyRepos[1]['name'] = 'test2';
		$arrSymfonyRepos[1]['description'] = 'testing2';
		$arrSymfonyRepos[1]['url'] = 'http://youtube.com';
		
		$arrSymfonyRepos[2]['name'] = 'test3';
		$arrSymfonyRepos[2]['description'] = 'testing3';
		$arrSymfonyRepos[2]['url'] = 'http://google.com';
		
		
		//echo '$arrSymfonyRepos = <pre>'; print_r($arrSymfonyRepos); exit;
        //return $this->render('default/index.html.twig', ['arrSymfonyRepos' => $arrSymfonyRepos]);
		//return $this->render('MyPracticeBundle:Default:index.html.twig');
        return $this->render('@MyPractice/Default/index.html.twig', ['arrSymfonyRepos' => $arrSymfonyRepos]);
    }
}
