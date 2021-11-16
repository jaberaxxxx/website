<?php 
    class crud{

        // private database object
        private $db;

        // constructor to initialize private variable to the database connection
        function __construct($conn){
            $this -> db = $conn;
        }

        // function to insert a new record into the attendee database
        public function insert($fname , $lname, $dob, $email, $password){
            try {

                // define sql statement to be executed
                $sql = " INSERT INTO users (firstname,lastname,dateofbirth,email,pass) VALUES (:fname, :lname, :dob, :email, :pass) "; // hude l parameters henne l placeholders 
               
                // prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);

                // bind all placeholders to the actual values
                $stmt->bindparam(':fname', $fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':dob', $dob);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':pass', $password);

                // execute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;   
            }

        }

        public function getUser(){//get all users from database
            $sql = "SELECT * FROM `users`;";
            $result = $this->db->query($sql);
            return $result;
        }
    }
?>