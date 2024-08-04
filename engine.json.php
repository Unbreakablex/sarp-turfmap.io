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
  "id": 3782,
  "name": "playboys 13",
  "color": "000000",
  "thread": "Discord.gg",
  "turfIDs": [
    "3782"
  ],
  "turfs": [
    "5216 4388 5337 4391 5340 4552 5271 4556 5258 4553 5238 4550 5217 4543"
  ],
  "turfcenter": [
    [
      5268.142857142857,
      4504.714285714285
    ]
  ],
  "turfPolygon": [],
  "dimensions": [
    [
      124,
      168
    ]
  ],
  "limits": [
    {
      "minx": 5216,
      "miny": 4388,
      "maxx": 5340,
      "maxy": 4556
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
