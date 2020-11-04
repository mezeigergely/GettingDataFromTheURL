<!DOCTYPE html>
<html>

<body>
    <h2 style="text-align: center">Getting Data from URL</h2>
    <div>
        <form align="center" method="GET" name="getUrl">
            <label for="url">URL:</label><br>
            <input type="text" id="url" name="url" value=""><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
    <div style="text-align: center">
        <?php
        if (isset($_GET['submit'])) {
            $url = $_GET['url'];
            $data = file_get_contents($url);
        }

        $exploded_data = explode(" ", $data);

        foreach ($exploded_data as $a) {
            if (strpos($a, "a") || strpos($a, "A")) {
                echo $a . ",";
            }
        }

        ?>
    </div>
</body>

</html>