<?php
class User
{
    const ADMIN = 2; //role Admin
    const GUEST = 1; //role Guest
    public $nom;
    private $role; //ici 1 ou 2

    private $login;
    private $motDePasse;
    private $lesAnciensMdp = []; //array

    public function __construct($nom, $login, $role = self::GUEST)
    {
        $this->nom = $nom;
        if ($this->roleExiste($role) == TRUE) {
            $this->role = $role;
        } else {
            $this->role = self::GUEST;
        }
        $this->login = $login;
        $this->motDePasse = 'achanger';
    }

    private function roleExiste($role)
    {
        if (in_array($role, array(self::GUEST, self::ADMIN, self::MODERATEUR))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        if ($this->roleExiste($role) == TRUE) {
            $this->role = $role;
        }
    }
    public function ancienMdp($mdp)
    {
        $existe = FALSE;
        $i = 0;
        while ($i < count($this->lesAnciensMdp) && $existe == FALSE) {
            if ($this->lesAnciensMdp[$i]->getValeurMdp() == $mdp) {
                $existe = TRUE;
            } else {
                $i++;
            }
        }
        return $existe;
    }
    public function __toString()
    {
        return "login: " . $this->login . " mot de passe: " . $this->motDePasse . PHP_EOL;
    }

    public function modifierMdp($nouveauMdp)
    {
        //todo
    }
    public function getLesAnciensMdp()
    {
        return $this->lesAnciensMdp;
    }
}
