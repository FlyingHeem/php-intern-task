<?php

namespace Classes;

class User extends DB
{
    
    /*Following are declared private to protect them from direct access.
    This is one of the significant feature of OOP called "Data abstraction". To access these private attributes, public getter/setter functions are provided, that is called an interface.These interface functions allow us
    to check for any validity or permission required before actually accessing private data.
    */

    private $firstName;
    private $lastName;
    private $email;
    private $id;

      /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $firstName
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /* inset user info into table */

    public function insert()
    {
        $query = "insert into users(email,first_name, last_name) 
            values(
            '".$this->getEmail()."',
            '".$this->getFirstName()."',
            '".$this->getLastName()."'
            )";

        return mysqli_query($this->db, $query);
    }

/* update a user information*/
    public function update()
    {
        $query = "update users set email = '".$this->getEmail()."', first_name = '".$this->getFirstName()."', last_name = '".$this->getLastName()."' where id = '".$this->getId()."'";

        return mysqli_query($this->db, $query);
    }


/* delete a user */
    public function delete()
    {
        $query = "delete from users where id = '".$this->getId()."'";

        return mysqli_query($this->db, $query);
    }

/* Get all the entries from DB to list users*/

    public function getAll()
    {
        $query = 'select * from users';
        $result = mysqli_query($this->db, $query);
        $users = [];
        if (mysqli_num_rows($result) > 0) {
            while ($user = mysqli_fetch_assoc($result)) {
                $thisUser = new self();
                $thisUser->setId($user['id']);
                $thisUser->setFirstName($user['first_name']);
                $thisUser->setLastName($user['last_name']);
                $thisUser->setEmail($user['email']);
                $users[] = $thisUser;
            }
        }

        return $users;
    }

/* returns a single user information*/

    public function getOne()
    {
        $query = "select * from users where id = '".$this->getId()."'";
        $result = mysqli_query($this->db, $query);
        $user = [];
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $thisUser = new self();
            $thisUser->setId($row['id']);
            $thisUser->setFirstName($row['first_name']);
            $thisUser->setLastName($row['last_name']);
            $thisUser->setEmail($row['email']);
            $user = $thisUser;
        }
        return $user;
    }
}
