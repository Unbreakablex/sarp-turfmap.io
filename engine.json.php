<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Configura la cabecera para devolver JSON
    header('Content-Type: application/json');

    // Tu lógica para generar la respuesta JSON
    $response = [
        "status" => "success",
        "data" => [
            "factions": [
        {
  "id": 7416,
  "name": "Playboy 13",
  "color": "000000",
  "thread": "DISCORD.GG",
  "turfIDs": [
    "7416"
  ],
  "turfs": [
    "5203 4391 5339 4387 5338 4548 5270 4556 5216 4549 5197 4535"
  ],
  "turfcenter": [
    [
      5260.5,
      4494.333333333333
    ]
  ],
  "turfPolygon": [],
  "dimensions": [
    [
      142,
      169
    ]
  ],
  "limits": [
    {
      "minx": 5197,
      "miny": 4387,
      "maxx": 5339,
      "maxy": 4556
    }
  ]
}
]
        ]
    ];

    // Codifica y devuelve la respuesta JSON
    echo json_encode($response, JSON_PRETTY_PRINT);
} else {
    // Devuelve un error 405 si se utiliza otro método HTTP
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
}
?>
