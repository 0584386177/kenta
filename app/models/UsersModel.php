<?php
class UsersModel extends Model
{
    private $username;
    private $password;
    private $email;
    private $phone;
    private $full_name;
    private $address;
    private $birthday;
    private $role_id;
    private $create_at;
    private $updated_at;

    // Kiểm tra có phải tài khoản admin không.....
    public function checkUserAdmin($username, )
    {
        try {
            $query = "SELECT * FROM users WHERE username = :username";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":username", $username);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (isset($user)  && !empty($user)) {
                return $user;
            } else {
                return null;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }




    public function getUsername()
    {
        return $this->username;
    }



    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }


    public function getFull_name()
    {
        return $this->full_name;
    }


    public function setFull_name($full_name)
    {
        $this->full_name = $full_name;

        return $this;
    }
    public function getRole_id()
    {
        return $this->role_id;
    }


    public function setRole_id($role_id)
    {
        $this->role_id = $role_id;

        return $this;
    }


    public function getCreate_at()
    {
        return $this->create_at;
    }


    public function setCreate_at($create_at)
    {
        $this->create_at = $create_at;

        return $this;
    }

    public function getUpdated_at()
    {
        return $this->updated_at;
    }


    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }


    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }
}
