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
        $site_array = [];
        if (isset($_GET['submit'])) {
            $url = $_GET['url'];
            $data = file_get_contents($url);
            $split = explode(" ", $data);
            foreach ($split as $i) {
                if (stripos($i, "a")) {
                    echo $i;
                }
            }
        }

        ?>
    </div>
</body>

</html>