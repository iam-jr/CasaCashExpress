<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title translate="no">Casa Cash Express</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .checkbox-group label {
            padding: 10px;
            cursor: pointer;
            display: block; /* Makes the label block-level for easier tapping */
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 5px 0; /* Adds spacing between options */
            transition: background-color 0.3s; /* Smooth transition */
        }

        .checkbox-group input[type="radio"] {
            display: none; /* Hide the default radio buttons */
        }

        .checkbox-group input[type="radio"]:checked + label {
            background-color: #00796b; /* Change background color when checked */
            color: white; /* Change text color when checked */
        }
    </style>
    
</head>
<body>
    <header>
        <img src="img/apple-touch-icon.png" alt="Casa Cash Express Logo" class="logo">
</header>