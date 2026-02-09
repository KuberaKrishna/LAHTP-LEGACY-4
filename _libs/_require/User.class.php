<?php declare(strict_types = 1);
class User{
    public static function login($userName, $userPassword){
        try{
        $conn = Database::getConnection();
        $sql = "SELECT `UserName`, `UserPassword` FROM `DP_Users` WHERE `UserName` = ?";
        $pstmt = $conn->prepare($sql);
        $pstmt->bind_param('s', $userName);
        $pstmt->execute();
        $result = $pstmt->get_result();
        if($result->num_rows === 1){
            $row = $result->fetch_assoc();
            if(password_verify($userPassword, $row['UserPassword'])){
                $_SESSION['SessionValue'] = $row['UserName'];
                return $_SESSION;
            } else {
                die("<h1>Incorrect credentials</h1>");
            }
        }
        }  catch (Exception $error) {
            die ("Database error: ".$error->getMessage());
        } finally {
            Database::closeConnection();
            }
    }
}
// TESTING SQLi, incorrect implementation, cause SQLi
//     public static function login($userName, $userPassword){
//         try{
//         $conn = Database::getConnection();
//         $sql = "SELECT `UserName`, `UserPassword` FROM `DP_Users` WHERE `UserName` = '$userName'";
//         $result = $conn->query($sql);
//         $row = $result->fetch_assoc();
//         if($result->num_rows === 1){
//             if(password_verify($userPassword, $row['UserPassword'])){
//                 echo "LOGIN SUCCESS";
//         } else {
//             echo "LOGIN FAILEs";
//         }
//         }
//         } catch(Exception $error){
//            die ("Database error: ".$error->getMessage());
//         } finally {
//             Database::closeConnection();
//         }
//     }
// }