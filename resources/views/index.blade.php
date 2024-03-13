<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            display: flex;
        }

        .left {
            width: 280px;
            max-width: 280px;
            background-color: #f9f9f9;
        }

        .right {
            flex-grow: 1;
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="left">Left column content...</div>
        <div class="right">Right column content...
            <br/>
            
        </div>
    </div>

</body>

</html>
