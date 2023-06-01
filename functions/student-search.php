<?php

if(isset($_POST['student_id'])){
    header('Location: ../students-list.php?student_id='.$_POST['student_id']);
}