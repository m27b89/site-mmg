<?php
    function connectDBContent(){
        $conn = mysqli_connect("localhost", "pmauser", "!Ivan221308", "contentMMG");
        mysqli_set_charset($conn, "utf8");
        if(!$conn){
            die("Connection data bases not");
        }
        return $conn;
    }

    function selectDBContent($conn){
        $sql = 'SELECT * FROM `content`';
        $result = mysqli_query($conn, $sql);
        $dataContent = array();
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $dataContent[] = $row;
                }
            }
            else{
                echo "0 results<br>";
        }
        return $dataContent;
    }

    function selectDBSlider($conn){
        $sql = "SELECT * FROM slider_data ";
        $query = mysqli_query($conn, $sql);
        $dataSlider = [];
            if($row = mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                    $dataSlider[] = $row;
                }
            }
            else{
                echo "0 results<br>";
            }

        return $dataSlider;
    }

    function selectDBPrice($conn){
        $sql = "SELECT * FROM price_data";
        $query = mysqli_query($conn, $sql);
        $dataPrice = [];
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                    $dataPrice[] = $row;
                }
            }
            else{
                echo "0 results<br>";
            }

        return $dataPrice;
    }

    function registrationDB($conn, $nameRegistration, $emailRegistration, $passwordRegistration, $date){
        $check = 'SELECT * FROM users WHERE email="'.$emailRegistration.'"';
        $query = mysqli_query($conn, $check);
        $row = mysqli_fetch_assoc($query);
        if($row["email"] === $emailRegistration){
            echo "false";
        }
        else{
            $sql = 'INSERT INTO users (user, email, password, time_add, hash) VALUES ("'.$nameRegistration.'", "'.$emailRegistration.'", "'.md5($passwordRegistration).'", "'.$date.'", "")';
                if(mysqli_query($conn, $sql)){
                    echo "registration";
                }
                else{
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
        }
        
    }

    function checkContent($conn, $id, $time, $code){
        $sql = 'SELECT id, vendor_code FROM content WHERE id='.$id;
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        if($row["vendor_code"] == $code){
            $sql = 'SELECT id, title, description, time_add FROM content WHERE id='.$id;
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($query);
        }
        return $row;
    }

    function updateContent($conn, $id, $time, $title, $description){
        $sql = 'UPDATE content SET title="'.$title.'", description="'.$description.'", time_add='.$time.' WHERE id='.$id;
        if(mysqli_query($conn, $sql)){
            header("Location: index.php");
        }
        else{
            echo "error".mysqli_error($conn);
        }
    }

    function selectUser($conn, $email, $password){
        $sql = 'SELECT * FROM users WHERE email="'.$email.'"';
        $answer = "";
        $query = mysqli_query($conn, $sql);
        $searchUser = mysqli_fetch_assoc($query);
        return $searchUser;
    }

    function generation($length = 5){
        $symbols = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRSTUVWXYZ1234567890!@#$%^&*()_+=|/.,<>`~-";
        $code = "";
        for($i = 0; $i < $length; $i++){
            $code .= $symbols[rand(0, strlen($symbols)-1)];
        }
        return $code;
    }

    function sendMessage($conn, $name, $email, $text, $time){
        $sql = 'INSERT INTO messages (name, email, message, time) VALUE ("'.$name.'", "'.$email.'", "'.$text.'", '.$time.')';
        if(mysqli_query($conn, $sql)){
            echo "message sent";
        }
    }

    function selectUsers($conn){
        $sql = "SELECT id, user, email, time_add FROM users";
        $query = mysqli_query($conn, $sql);
        $rows = [];
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                $rows[] = $row;
            }
        }
        return $rows;
    }

    function selectMessages($conn){
        $sql = "SELECT * FROM messages";
        $query = mysqli_query($conn, $sql);
        $rows = [];
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                $rows[] = $row;
            }
        }
        return $rows;
    }

    function closeDB($conn){
        mysqli_close($conn);
    }
?>