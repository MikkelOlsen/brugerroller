<?php

class Users extends \PDO{
    private $db = null;
    
    public function __construct(DB $db) {
        $this->db = $db;
    }

    public function newUser(string $username, string $name, string $password) : void
    {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $this->db->query(
            "INSERT INTO `users`(`user_username`, `user_password`, `fk_role_id`, `user_name`) 
            VALUES (:username, :password, :fkUser, :name)",
            [
                ':username' => $username,
                ':password' => $password,
                ':fkUser' => 3,
                ':name' => $name
            ]
        );
    }

    public function checkUsername(string $username)
    {
        return $this->db->single("SELECT user_username FROM users WHERE user_username = :username", [':username' => $username]);
    }

    

    public function login(string $username, string $password) : void
    {
        $check = $this->db->single("SELECT user_id, user_username, user_password, user_name
                                    FROM users
                                    WHERE user_username = :username", 
                                    [
                                        ':username' => $username
                                    ]);
        if($password === $check->user_password) {
            $_SESSION['userid'] = $check->user_id;
            $_SESSION['username'] = $check->user_username;
            $_SESSION['name'] = $check->user_name;
            $_SESSION['permissions'] = $this->getPermissions($check->user_id);
        }

    }

    public function getPermissions(int $id) : array
    {
        return $this->db->toList("SELECT permission_id, permission_name
                                   FROM users
                                   INNER JOIN userroles
                                   ON users.fk_role_id = userroles.role_id
                                   INNER JOIN userroles_and_permissions
                                   ON userroles.role_id = userroles_and_permissions.fk_userrole_id
                                   INNER JOIN permissions
                                   ON permissions.permission_id = userroles_and_permissions.fk_permission_id
                                   WHERE user_id = :id
                                   ORDER BY permission_id ASC", [':id' => $id]);
    }
    
    
    
    public function loginCheck (int $check) : bool
    {
			if($this->db->single("SELECT user_id FROM users WHERE user_id = :id", [':id' => $check]) ) {
                return true;
            } else {
                return false;
            }
    }

    public function newsletter(int $id, string $news) : void
    {
            $this->db->query("UPDATE `users` SET `newsletter` = :newsletter WHERE user_id = :id", [':newsletter' => $news, ':id' => $id]);

    }

    public function passChange(string $password, int $id) : void
    {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $this->db->query("UPDATE `users` SET `password` = :password WHERE user_id = :id", [':password' => $password, ':id' => $id]);
    }

    public function userSettings(string $username, string $mail, int $id) : void
    {
        $this->db->query("UPDATE `users` SET `username` = :username, `email` = :email WHERE user_id = :id", [':username' => $username, ':email' => $mail, ':id' => $id]);
    }

   
}