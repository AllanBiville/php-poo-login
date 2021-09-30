<?php
include ("User.php");
class UserManager{

    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }
    public function setDb(PDO $db) : UserManager
    {
        $this->_db = $db;
        return $this;
    }
    public function add(User $user):bool
    {
        $query = $this->_db->prepare('INSERT INTO users (email,`password`,`role`) VALUES (:email,:password,:role);');
        $query->bindValue(':email', $user->getEmail());
        $query->bindValue(':password', $user->getPassword());
        $query->bindValue(':role', $user->getRole());
        return $query->execute();
    }
    public function delete(User $perso)
    {
        $query = $this->_db->prepare('DELETE FROM `users`WHERE id=:id;');
        $query->bindValue(':id', $user->getId());
        return $query->execute();
        
    }
    public function getOne(int $id)
    {
        $sth = $this->_db->prepare('SELECT id,nom,`force`, degats,niveau, experience FROM personnages WHERE id= ?;');
        $sth-> execute(array($id));
        $ligne = $sth->fetch();
        $perso = new Personnage($ligne);
        return $perso;
    }
    public function getAll():array
    {
        $listeUsers = array();
        $request = $this->_db->query('SELECT * FROM users;');
        while($ligne = $request->fetch(PDO::FETCH_ASSOC))
         {
            $perso = new User($ligne);
            $listeUsers[] = $perso;

         }
         return $listeUsers;
    }
    public function update(Personnages $perso):bool
    {

    }
}
?>