<?php
namespace Customize\Controller;
use Eccube\Controller\AbstractController;
use Eccube\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
class SamplePageController extends AbstractController
{
    /**
     * @Method("GET")
     * @Route("/sample", name="sample")
     * @Template("Sample/index.twig")
     */
    public function testMethod1 () {
        /**@var Product $Product*/
        $Product = $this->productRepository->find(1);
         dump($Product->maker_name);

           $Product->maker_name = 'あああ';
//           $app['orm.em']->persist($Product);
//           $app['orm.em']->flush();
       return ['name'=>'UC-Cube', 'back'=>'back'];
    }
    /**
     *
     * @Method("GET")
     * @Route("/sample/{id}", name="sample_page")
     * @Template("Sample/detail.twig")
     */
    public function testMethod ($id) {
        /**@var Product $product*/
        $product = $this->entityManager->getRepository('Eccube\Entity\product')->find($id);
        return ['product' => $product->getId()];
    }
    /**
     * @Method("GET")
     * @Route("/redirect", name="redirect_home")
     */
    public function testMethod2 () {
        return $this->redirectToRoute('sample');
    }
    /**
     * @Method("GET")
     * @Route("/%eccube_admin_route%/sample1")
     * @Template("Sample/redirect.twig")
     */
    public function testMethod3 () {
        return ['name'=> 'bon'];
    }
}
