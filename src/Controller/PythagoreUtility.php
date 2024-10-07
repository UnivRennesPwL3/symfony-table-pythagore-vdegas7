<?php

class PythagoreUtility {
    public static function display($size = 10) {
        $html = <<<HTML
        <style>
            table.pythagore {
                border-collapse: collapse;
                font-family: Arial, sans-serif;
            }
            table.pythagore td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: center;
            }
            table.pythagore tr:first-child,
            table.pythagore td:first-child {
                background-color: #f2f2f2;
                font-weight: bold;
            }
            table.pythagore td.diagonal {
                background-color: #e6e6e6;
            }
        </style>
        <table class="pythagore">
HTML;

        // Première ligne
        $html .= "<tr><td>0</td>";
        for ($i = 1; $i <= $size; $i++) {
            $html .= "<td>{$i}</td>";
        }
        $html .= "</tr>";

        // Lignes suivantes
        for ($i = 1; $i <= $size; $i++) {
            $html .= "<tr><td>{$i}</td>";
            for ($j = 1; $j <= $size; $j++) {
                if ($i == $j) {
                    $html .= '<td class="diagonal">X</td>';
                } else {
                    $html .= "<td>" . ($i * $j) . "</td>";
                }
            }
            $html .= "</tr>";
        }

        $html .= "</table>";
        return $html;
    }
}
    