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
  "id": 0,
  "name": "playboys 13",
  "color": "000000",
  "thread": "Discord.gg",
  "turfIDs": [
    "3782"
  ],
  "turfs": [
    
  ],
  "turfcenter": [
    [
      5
    ]
  ],
  "turfPolygon": [],
  "dimensions": [
    [
      
    ]
  ],
  "limits": [
    {
      
    }
  ]
}
  ]
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
