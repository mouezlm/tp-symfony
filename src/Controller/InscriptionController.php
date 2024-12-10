<?php // src/Controller/InscriptionController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class InscriptionController extends AbstractController 
{
    #[Route(path:"/number" , name:"number")]
public function number()
{
$number = random_int(0, 100);
return $this->render('Inscription/accueil.html.twig', [
    'number' => $number,
    ]);}
}
?>