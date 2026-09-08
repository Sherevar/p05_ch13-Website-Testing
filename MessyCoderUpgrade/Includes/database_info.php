<?php
        include '../Includes/database.inc.php';

        $sql = "SELECT * FROM tb_projects";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                $uuid = $row["uuid"];
                $image = getPhoto($uuid);

                echo "<h2>" . htmlspecialchars($row["name"]) . "</h2>";
                echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
                echo "<p><a href='" . htmlspecialchars($row["url"]) . "' target='_blank'>Bekijk Project</a></p>";
                echo "<hr>";
            }
        } else {
            echo "<p>Geen projecten gevonden.</p>";
        }

        $conn->close();

        function getPhoto($uuid) {
            $sql = "SELECT * FROM tb_projectimages WHERE project_uuid = ?";
            // Prepared statement om SQL-injectie te voorkomen
            global $conn;
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $uuid);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows === 0) {
                return "<img src='images/projects/default.png' alt='Default Project Image' style='max-width:200px; height:auto;'>";
            }
            $stmt->close();

            $imagePath = "images/projects/" . $uuid . ".png";
            if (file_exists($imagePath)) {
                return "<img src='" . htmlspecialchars($imagePath) . "' alt='Project Image' style='max-width:200px; height:auto;'>";
            } else {
                return "<img src='images/projects/default.png' alt='Default Project Image' style='max-width:200px; height:auto;'>";
            }
        }
    ?>