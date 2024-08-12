<?php

include('conect.php');

$Feedbacks = 'SELECT * FROM Feedback';

$QueryFeedbacks = mysqli_query($conexao, $Feedbacks);
