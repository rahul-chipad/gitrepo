<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GitController extends Controller {

    /**
     * @Route("/git/repo/", name="gitrepo")
     */
    public function repoAction() {

        $client = new \Github\Client();
        $repositories = $client->api('repo')->find('symfony');
        $repos = $repositories['repositories'];
        return $this->render('gitrepo/repo.html.twig', array(
                    'repos' => $repos,
        ));
        
    }

}
