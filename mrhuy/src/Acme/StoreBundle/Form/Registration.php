<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/14
 * Time: 9:23 AM
 */

namespace Acme\StoreBundle\Form;

use Symfony\Component\Validator\Constraints as Asset;

use Acme\StoreBundle\Form\UserType;

Class Registration{
    /**
     * @Assert\Type(type="Acme\AccountBundle\Entity\User")
     */
    protected $user;
    /**
     * @Assert\NotBlank()
     * @Assert\True()
     */
    protected $termsAccepted;

    public function setUser(User $user)
    {
        $this->user = $user;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }
    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (Boolean) $termsAccepted;
    }
}