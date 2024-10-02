<?php
$command = 'python3 SPORTIFY/app.py > /dev/null 2>&1 & echo $!';
$pid = shell_exec($command);

if ($pid) {
    // Optionally, you can log or display the PID if needed
    // echo "<pre>Streamlit server started with PID: $pid</pre>";

    // Introduce a slight delay to ensure the server is up and running
    sleep(3);

    header("Location: http://127.0.0.1:5000/");
    exit();
} else {
    echo "Failed to start Streamlit server.";
}
?>