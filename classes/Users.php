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
        $check = $this->db->single("SELECT user_id, user_username, user_password, user_name, userroles.role_id
                                    FROM users
                                    INNER JOIN userroles
                                    ON users.fk_role_id = userroles.role_id
                                    WHERE user_username = :username", 
                                    [
                                        ':username' => $username
                                    ]);
        if($password === $check->user_password) {
            $_SESSION['userid'] = $check->user_id;
            $_SESSION['username'] = $check->user_username;
            $_SESSION['name'] = $check->user_name;
            $_SESSION['role'] = $check->role_id;
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
    
    public function typePermissions(int $id) : array
    {
        return $this->db->query("SELECT permission_id, permission_name
                                FROM userroles
                                INNER JOIN userroles_and_permissions
                                ON userroles.role_id = userroles_and_permissions.fk_userrole_id
                                INNER JOIN permissions
                                ON permissions.permission_id = userroles_and_permissions.fk_permission_id
                                WHERE role_id = :id
                                ORDER BY permission_id ASC", [':id' => $id]);
    }

    public function allPermissionsArray() : array
    {
        return $this->db->query("SELECT permission_id, permission_name
                                FROM permissions
                                ORDER BY permission_id ASC", [], \PDO::FETCH_ASSOC);
    }

    public function allPermissions() : array
    {
        return $this->db->query("SELECT permission_id, permission_name
                                FROM permissions
                                ORDER BY permission_id ASC");
    }

    public function delPerm(int $permid, int $roleid) : array
     {
        return $this->db->query("DELETE FROM userroles_and_permissions
                                  WHERE (fk_permission_id = :permid AND fk_userrole_id = :roleid)", [':permid' => $permid, ':roleid' => $roleid]);
    }
    
    
    public function loginCheck (int $check) : bool
    {
			if($this->db->single("SELECT user_id FROM users WHERE user_id = :id", [':id' => $check]) ) {
                return true;
            } else {
                return false;
            }
    }

    public function newPerm(int $permid, int $roleid) : void
    {
        $this->db->query("SELECT fk_userrole_id, fk_permission_id 
                              FROM userroles_and_permissions
                              WHERE (fk_userrole_id = :roleid AND fk_permission_id = :permid)",
                              [
                                  ':roleid' => $roleid,
                                  ':permid' => $permid
                              ]);
        if($this->db->count === 0) {
            $this->db->query("INSERT INTO `userroles_and_permissions`(`fk_userrole_id`, `fk_permission_id`) 
                            VALUES (:roleid, :permid)",
                            [
                                ':roleid' => $roleid,
                                ':permid' => $permid
                            ]);
        }
    }

   
}