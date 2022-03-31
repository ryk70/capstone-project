<?php

class AprilInstituteScheduler_API
{
    var $host = null;
    var $user = null;
    var $pass = null;
    var $name = null;
    var $conn = null;
    var $result = null;

    function __construct() {  //$dbhost, $dbuser, $dbpass, $dbname
        //$this -> host = "147.182.163.120";
        //$this -> user = "sysadmin";
        //$this -> pass = "Blazeit420";
        //$this -> name = "AprilInstituteProd";

        $this -> host = "147.182.163.120";
        $this -> user = "sysadmin";
        $this -> pass = "Blazeit420";
        $this -> name = "test";
    }

    public function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
        if (mysqli_connect_errno()) {

        } else {

        }

        $this->conn->set_charset("utf8");

    }

    public function disconnect()
    {
        if ($this->conn != null) {
            $this->conn->close();
        }
    }

    public function registerUser($first_name, $last_name, $email, $phone_number, $password)
    {

        $sql = "INSERT INTO users (first_name, last_name, email, phone_number, password)
                VALUES(?, ?, ?, ?, ?)";
        $statement = $this->conn->prepare($sql);

        if (!$statement) {
            throw new Exception($statement->error);
        }

        $statement->bind_param("sssis", $first_name, $last_name, $email, $phone_number, $password);
        $statement->execute();
        $ret = mysqli_insert_id($this->conn);
        if ($ret == 0) {
            return null;
        } else {
            return $ret;
        }
    }


    public function verifyLogIn($email, $password) {
        $sql = "SELECT * FROM users WHERE email = ?";

        $statement = $this->conn->prepare($sql);

        if (!$statement) {
            throw new Exception($statement->error);
        }

        $statement->bind_param("s", $email);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_assoc();

        if(password_verify($password, $row['password'])) {
            return $row;
        }
        else {
            return false;
        }
    }

    public function getTypeFromTypeID($type_id){
        $sql = "SELECT type 
                FROM types
                WHERE types.id = ?";

        $statement = $this->conn->prepare($sql);

        if (!$statement) {
            throw new Exception($statement->error);
        }

        $statement->bind_param("i", $type_id);
        $statement->execute();
        $result = $statement -> get_result();
        while($row = $result -> fetch_assoc()) {
            $ret = $row;
        }
        return $ret;
    }

    public function getScheduledWith($event_id){
        $sql = "SELECT users.*
                FROM admins, xref_users_events, users
                WHERE admins.uid = user_id
                AND admins.uid = users.uid
                AND event_id = ?";

        $statement = $this->conn->prepare($sql);

        if (!$statement) {
            throw new Exception($statement->error);
        }

        $statement->bind_param("i", $event_id);
        $statement->execute();
        $result = $statement -> get_result();

        return $result -> fetch_assoc();
    }

    public function addAppointment($type, $scheduled_with, $is_virtual, $date, $description, $address) {
        if($is_virtual == 1) {
            $address = "https://us02web.zoom.us/j/3847814790";
        }

        $sql = "INSERT INTO events (type_id, is_virtual, date, address, description)
                VALUES(?, ?, ?, ?, ?)";

        $statement = $this -> conn -> prepare($sql);

        if (!$statement) {
            throw new Exception($statement->error);
        }

        $statement -> bind_param("iisss", $type, $is_virtual, $date, $address, $description);
        $statement -> execute();
        $result = $statement -> get_result();
        $ret = mysqli_insert_id($this->conn);

        return $ret;
    }

    public function updateEvent($event_id, $scheduled_with, $date, $description) {
        $sql_event = "UPDATE events SET date=?, description=? WHERE id=?";
        // $sql_xref = "UPDATE xref_users_events SET user_id = ? WHERE "
        // The above needs to be worked on to make sure that $scheduled_with actually works
        $stmt = $this -> conn -> prepare($sql_event);

        if (!$stmt) {
            throw new Exception($stmt->error);
        }

        $stmt -> bind_param("ssi", $date, $description, $event_id);
        $stmt -> execute();
        $result = $stmt -> get_result();

        return $result;
    }

    public function addXref($uid, $event_id) {
        $sql = "INSERT INTO xref_users_events (user_id, event_id)
                VALUES(?, ?)";

        $statement = $this -> conn -> prepare($sql);

        if (!$statement) {
            throw new Exception($statement->error);
        }

        $statement -> bind_param("ii", $uid, $event_id);
        $statement -> execute();
        $result = $statement -> get_result();

        return $result;
    }

    public function getNumUsersInEvent($event_id) {
        $sql = "SELECT * FROM xref_users_events WHERE event_id = ?";

        $statement = $this -> conn -> prepare($sql);

        if (!$statement) {
            throw new Exception($statement->error);
        }

        $statement -> bind_param("i", $event_id);
        $statement -> execute();
        $result = $statement -> get_result();

        return $result -> num_rows;
    }

    public function createEvent($isVirtual, $date, $address, $description, $capacity, $name) {
        if($isVirtual == 1) {
            $address = "https://us02web.zoom.us/j/3847814790";
        }

        $sql = "INSERT INTO events (type_id, is_virtual, date, address, description, capacity, name)
                VALUES(2, ?, ?, ?, ?, ?, ?)";

        $statement = $this -> conn -> prepare($sql);

        if (!$statement) {
            throw new Exception($statement->error);
        }

        $statement -> bind_param("isssis", $isVirtual, $date, $address, $description, $capacity, $name);
        $statement -> execute();
        $result = $statement -> get_result();
        $ret = mysqli_insert_id($this->conn);

        return $ret;
    }

    public function addToEvent($event_id, $uid) {
        $sql = "INSERT INTO xref_users_events (user_id, event_id)
                VALUES(?, ?)";

        $statement = $this -> conn -> prepare($sql);

        if (!$statement) {
            throw new Exception($statement->error);
        }

        $statement -> bind_param("ii", $uid, $event_id);
        $statement -> execute();
        $result = $statement -> get_result();

        return $uid;
    }
    public function getUsersEventsWithAdmin($user_id, $admin_id) {
        /**
         * Given a user and an admin, get all events that the user is registered
         * to that the admin manages
         */
        $sql = "SELECT e.description
            FROM
                xref_users_events AS x,
                users AS u,
                events AS e";
    }

    public function getUsersScheduledWithAdmin($admin_id) {
        /** 
         * Gets all of xref_users_events, and then filters out the ones with
         * $admin_id, and then filters by only the events that $admin_id
         * is managing
         */
        $sql = "SELECT DISTINCT x.user_id, u.first_name, u.last_name
            FROM
                xref_users_events AS x,
                users AS u
            WHERE
                x.user_id != ?
                AND x.user_id = u.uid
                AND x.event_id IN (SELECT event_id FROM xref_users_events AS x WHERE x.user_id = ?)
            ORDER BY u.last_name, u.first_name;";
		
        $statement = $this -> conn -> prepare($sql);

        if (!$statement) throw new Exception($statement->error);

        $statement -> bind_param("ii", $admin_id, $admin_id);
        $statement -> execute();
        $result = $statement -> get_result();

        return $result;
    }
}