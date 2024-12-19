<?php
// data base configuration
$host = "localhost";
$my_user = "root";
$my_password = "";
$my_database = "futChampions";



$connection = mysqli_connect($host, $my_user, $my_password, $my_database); // create data base connection


// while ($row = $result->fetch_assoc()) {
//     echo "
//     <tr>
//         <td class='w-1/6 text-left py-3 px-4'>{$row['player_id']}</td>
//         <td class='w-1/6 text-left py-3 px-4'>{$row['player_name']}</td>
//         <td class='text-left py-3 px-4'>{$row['player_position']}</td>
//         <td class='text-left py-3 px-4'>{$row['rating']}</td>
//         <td class='text-left py-3 px-4'>{$row['pace']}</td>
//         <td class='text-left py-3 px-4'>{$row['shooting']}</td>
//         <td class='text-left py-3 px-4'>{$row['passing']}</td>
//         <td class='text-left py-3 px-4'>{$row['dribbling']}</td>
//         <td class='text-left py-3 px-4'>{$row['defending']}</td>
//         <td class='text-left py-3 px-4'>{$row['physical']}</td>

//          </tr>
//     ";
// }

?>