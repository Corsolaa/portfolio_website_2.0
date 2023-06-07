<?php
/**
 * @param $title string
 * @param $blobs array
 * @return void
 */
function generate_blob_field(string $title, array $blobs): void
{
    echo "<div class='title_section'>";
    echo "<p>$title</p>";
    echo "<div class='div_sum_up'>";
    // Loop through blobs
    foreach ($blobs as $blob) {
        echo "<div class='blob'>$blob</div>";
    }
    echo "</div>";
    echo "</div>";
}