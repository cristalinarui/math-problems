<?php
function calculate_area($shape, $dimensions) {
    switch ($shape) {
        case 'rectangle':
            if (count($dimensions) == 2) {
                echo "The area of a rectangle with dimensions: [" . implode(", ", $dimensions) . "] is: " . ($dimensions[0] * $dimensions[1]) . "\n";
            } else {
                echo "Error: The shape is not supported.\n";
            }
            break;
        case 'circle':
            if (count($dimensions) == 2) {
                echo "The area of a circle with dimensions: [" . implode(", ", $dimensions) . "] is: " . M_PI * ($dimensions[0] ** 2) . "\n";
            } else {
                echo "Error: The shape is not supported.\n";
            }
            break;
        case 'triangle':
            if (count($dimensions) == 2) {
                $base = $dimensions[0];
                $height = $dimensions[1];
                $area = ($base * $height) / 2;
                echo "The area of a triangle with dimensions: [" . implode(", ", $dimensions) . "] is: " . $area . "\n";
            } else {
                echo "Error: The shape is not supported.\n";
            }
            break;
        default:
            echo "Error: The shape is not supported.\n";
    }
}

function calculate_area_shapes($shapes, $dimensions) {
    foreach ($shapes as $shape => $dimensions) {
        if (count($dimensions) == 0) {
            $shapes[$shape] = $calculate_area($shape, $dimensions);
        } else {
            $shapes[$shape] = calculate_area($shape, $dimensions);
        }
    }

    echo "All shapes areas: ";
    foreach ($shapes as $shape => $area) {
        if (count($shape) == 0 || count($dimensions) < 2 || is_numeric($area)) {
            echo $shape . ": " . $area;
        } else {
            echo $shape . ": " . number_format($area, 2);
        }
    }
}
