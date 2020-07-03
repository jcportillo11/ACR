<?php

$CAR_LIST = '[
    {
        "code":"AMK1", 
        "image":"lib/images/bmw-x6.jpg",
        "name":"BMW X6",
        "category":"De Lujo",
        "attributes": {
            "airConditioner" : true,
            "transmition": "Automático",
            "trunkCapacity": 5,
            "peopleCapacity": 7
        },
        "price":3500.00,
        "description":"Descripcion del vehiculo larga texto palabras mas texto de relleno, descripcion del vehiculo larga texto palabras mas texto de relleno, descripcion del vehiculo larga texto palabras mas texto de relleno"
    },{
        "code":"AMK2", 
        "image":"lib/images/seat-ibiza.jpg",
        "name":"Seat Ibiza",
        "category":"Intermedio",
        "attributes": {
            "airConditioner" : true,
            "transmition": "Manual",
            "trunkCapacity": 4,
            "peopleCapacity": 5
        },
        "price":1000.00,
        "description":"Descripcion del vehiculo larga texto palabras mas texto de relleno, descripcion del vehiculo larga texto palabras mas texto de relleno, descripcion del vehiculo larga texto palabras mas texto de relleno"
    },{
        "code":"ALK1", 
        "image":"lib/images/imagen-rota.jpg",
        "name":"Spark o similar",
        "category":"Compacto",
        "attributes": {
            "airConditioner" : true,
            "transmition": "Manual",
            "trunkCapacity": 3,
            "peopleCapacity": 4
        },
        "price":459.00,
        "description":"Descripcion del vehiculo larga texto palabras mas texto de relleno, descripcion del vehiculo larga texto palabras mas texto de relleno, descripcion del vehiculo larga texto palabras mas texto de relleno"
    },{
        "code":"ALK4", 
        "image":"lib/images/VW-Jetta.jpg",
        "name":"Jetta o similar",
        "category":"Full-Size",
        "attributes": {
            "airConditioner" : true,
            "transmition": "Manual",
            "trunkCapacity": 3,
            "peopleCapacity": 5
        },
        "price":2150.00,
        "description":"Descripcion del vehiculo larga texto palabras mas texto de relleno, descripcion del vehiculo larga texto palabras mas texto de relleno, descripcion del vehiculo larga texto palabras mas texto de relleno"
    }
]';

$CARS_LIST = json_decode($CAR_LIST);
?>