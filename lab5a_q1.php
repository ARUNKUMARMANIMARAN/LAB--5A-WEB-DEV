<!DOCTYPE html>
<html lang="en">
<head>
   <title>Lab 5a Q1</title>
   <style>
       table {
           border-collapse: collapse;
           width: 50%;
           margin: 20px auto;
       }
       table, th, td {
           border: 1px solid black;
       }
       th, td {
           padding: 10px;
           text-align: left;
       }
   </style>
</head>
<body>
   <?php
      $name = "ARUN KUMAR A/L MANIMARAN";
      $matric_number = "CI230128";
      $course = "BACHELOR OF COMPUTER SCIENCE (WEB TECHNOLOGY)";
      $year_of_study = "YEAR 2";
      $address = "NO 22A, JALAN BB 2/6, TAMAN BANTING BARU, 42700 BANTING, SELANGOR";
   ?>

   <table>
     <tr>
       <th>DETAILS</th>
       <th>INFORMATION</th>
     </tr>
     <tr>
       <td>NAME</td>
       <td><?php echo $name; ?></td>
     </tr>
     <tr>
       <td>MATRIC NUMBER</td>
       <td><?php echo $matric_number; ?></td>
     </tr>
     <tr>
       <td>COURSE</td>
       <td><?php echo $course; ?></td>
     </tr>
     <tr>
       <td>YEAR OF STUDY</td>
       <td><?php echo $year_of_study; ?></td>
     </tr>
     <tr>
       <td>ADDRESS</td>
       <td><?php echo $address; ?></td>
     </tr>
   </table>

</body>
</html>