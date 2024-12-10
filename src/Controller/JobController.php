<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; 
use App\Entity\Job;

class JobController extends AbstractController
{
    #[Route('/job', name: 'app_job')]
    public function index(EntityManagerInterface $entityManager): Response
    {   $job = new Job();
        $job->setType( 'Développeur');
        $job->setCompany( 'SOTORIPOP');
        $job->setDescription('LARAVEL');
        $job->setExpiresAt( new \DateTimeImmutable()); 
        $job->setEmail('haykel@gmail.com');
        $entityManager->persist($job);
        $entityManager->flush();
        return $this->render('job/index.html.twig',[
            'id' =>$job->getId(),
        ]);
    }
}
