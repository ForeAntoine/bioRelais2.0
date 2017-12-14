<?php
class responsable{
    private $mail;
    private $nom;
    private $prenom;
    private $adresse;
    private $password;
    
    /**
     * @return $mail
     */
    public function getMail()
    {
        return $this->mail;
    }
    
    /**
     * @return $nom
     */
    public function getNom()
    {
        return $this->nom;
    }
    
    /**
     * @return $prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    /**
     * @return $adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    
    /**
     * @return $password
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * @param $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    
    /**
     * @param $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    /**
     * @param $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    
    /**
     * @param $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    
    /**
     * @param $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    
    /**
     * adherent constructor.
     * @param $codeAcces
     */
    
    public function __construct($mail)
    {
        $this->mail = $mail;
    }
    
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
    
    
    
}