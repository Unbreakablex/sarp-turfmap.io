<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Configura la cabecera para devolver JSON
    header('Content-Type: application/json');

    // Tu lógica para generar la respuesta JSON
    $ajax = [
        "status" => "success",
        "data" => [
            "factions": [
        {
  "id": 2076,
  "name": "Playboys 13",
  "color": "#ff00ff",
  "thread": "eirondiaz.dev",
  "turfIDs": [
    "2076"
  ],
  "turfs": [
    "5041 4614 5096 4613 5186 4643 5182 4696 5180 4747 5109 4748 5045 4747"
  ],
  "turfcenter": [
    [
      5119.857142857143,
      4686.857142857143
    ]
  ],
  "turfPolygon": [],
  "dimensions": [
    [
      145,
      135
    ]
  ],
  "limits": [
    {
      "minx": 5041,
      "miny": 4613,
      "maxx": 5186,
      "maxy": 4748
    }
  ]
}
  ]
    ]
  ];

    // Codifica y devuelve la respuesta JSON
    echo json_encode($ajax);
} else {
    // Devuelve un error 405 si se utiliza otro método HTTP
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
}
?>
