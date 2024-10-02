<?php
$command = 'nohup streamlit run /Applications/XAMPP/xamppfiles/htdocs/SPORTIFY/handle_ai_interaction.py > /dev/null 2>&1 & echo $!';
$pid = shell_exec($command);
$port = 8501; // Default port for Streamlit

if ($pid) {
    // Check if the process is running
    $checkProcess = shell_exec("ps -p $pid");

    if (strpos($checkProcess, $pid) !== false) {
        header("Location: http://localhost:8501");
        exit();
    } 
    else{
        header("Location: http://localhost:8501");
        exit();
    }
}
else{
    header("Location: http://localhost:8501");
        exit();
}
?>