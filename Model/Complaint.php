<?php
namespace Phppot;

class Complaint
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . '/../lib/DataSource.php';
        $this->ds = new DataSource();
    }

    

    

    /**
     * to signup / register a user
     *
     * @return string[] registration status message
     */
    public function registerComplaint()
    {
        $name = $_POST["name"];
        $email =$_POST["email"];
        $phone =$_POST["phone"];
        $address =$_POST["address"];
        $complain =$_POST["complain"];
        $query = 'INSERT INTO tbl_complain (username, password, email) VALUES (?, ?, ?, ?, ?)';
            $paramType = 'sssss';
            $paramValue = array(
                $name,
                $email,
                $phone,
                $address,
                $complain
            );
            $complainId = $this->ds->insert($query, $paramType, $paramValue);
            if (! empty($complainId)) {
                $response = array(
                    "status" => "success",
                    "message" => "Your complaint has been registered successfully."
                );
            }
        
        return $response;
    }

    public function getMember($username)
    {
        $query = 'SELECT * FROM tbl_member where username = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }

    /**
     * to login a user
     *
     * @return string
     */
    public function loginMember()
    {
        $memberRecord = $this->getMember($_POST["username"]);
        $loginPassword = 0;
        if (! empty($memberRecord)) {
            if (! empty($_POST["login-password"])) {
                $password = $_POST["login-password"];
            }
            $hashedPassword = $memberRecord[0]["password"];
            $loginPassword = 0;
            if (password_verify($password, $hashedPassword)) {
                $loginPassword = 1;
            }
        } else {
            $loginPassword = 0;
        }
        if ($loginPassword == 1) {
            // login sucess so store the member's username in
            // the session
            session_start();
            $_SESSION["username"] = $memberRecord[0]["username"];
            session_write_close();
            $url = "./home.php";
            header("Location: $url");
        } else if ($loginPassword == 0) {
            $loginStatus = "Invalid username or password.";
            return $loginStatus;
        }
    }
}
