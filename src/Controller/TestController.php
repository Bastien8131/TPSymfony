<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController {
    public function nbaleatoire() {
        $nb = random_int(0, 100);
        return $this->render('nbaleatoire.html.twig', [
        'lenombresorti' => $nb
        ]);
    }
    
    public function dateMaintenant(){
        $date = getdate();
        return $this->render('maintenant.html.twig', [
        'dateMaintenant' => $date
        ]);
    }
    
    public function base(){
        return $this->render('base.html.twig', [
        ]);
    }
}

?>

<?php /*

namespace App\Controller ;

use Symfony\Component\HttpFoundation\Response ;

class TestController{
    public function nbaleatoire(){
        $nb = random_int ( 0 , 100 );
        return new Response (
        '<html><body>Résultat : ' . $nb . '</body></html>'
        );
    }
}*/

?>