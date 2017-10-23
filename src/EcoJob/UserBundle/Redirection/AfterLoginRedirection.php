<?php
 
namespace EcoJob\UserBundle\Redirection;
 
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
 
class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;
 
    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }
 
    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return RedirectResponse
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        $roles = $token->getRoles();
        $rolesTab = array_map(function($role){ 
          return $role->getRole(); 
        }, $roles);
        if(in_array('ROLE_SUPER_ADMIN', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('eco_job_admin_index'));        
        else if (in_array('ROLE_CANDIDAT', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('eco_job_candidat_index'));
        else if(in_array('ROLE_RECRUTEUR', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('eco_job_recruteur_index'));                        
        else
            $redirection = new RedirectResponse($this->router->generate('homepage'));            
        return $redirection;
    }
}