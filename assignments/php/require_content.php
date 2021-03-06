<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #D3D3D3;
        }

        header {
            border-bottom: 2px solid white;
            box-shadow: inset 0 -3px 5px grey;
            display: block;
            text-align: center;
            margin-bottom: 50px;
        }

        ul {
            display: inline-block;
            margin: 0 auto;
        }

        ul li {
            display: inline-block;
            list-style: none;
            margin: 10px 0;
            width: 150px;
        }

        ul li:nth-child(1) a {
            border: none;
        }

        header {
            height: 40px;
        }

        header ul li a {
            display: block;
            text-decoration: none;
            color: #4e4e4e;
            border-left: 1px solid #4e4e4e;
        }

        header ul li a.active {
            color: red;
        }

        .row {
            display: block;
            text-align: center;
        }

        .row div.block {
            width: 350px;
            height: 150px;
            background-color: white;
            box-shadow: inset 3px 3px 10px;
            display: inline-block;
            overflow: auto;
        }

        .row div.block p {
            padding: 10px;
        }

        footer {
            border-top: 2px solid white;
            box-shadow: inset 0 3px 5px grey;
            margin-top: 50px;
            display: block;
            text-align: center;
        }

        footer ul li {
            width: auto;
            margin: 10px 5px;
        }

        footer ul li button {
            width: 200px;
            border-radius: 0;
            border-width: 3px;
        }

        footer ul li button:nth-child(2),
        footer ul li button:nth-child(3) {
            border-style: inset;
        }
    </style>
</head>

<body>
    <?php require "require_header.html"; ?>
    <main>
        <div class="row">
            <div class="block"></div>
            <div class="block" id="block">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui mauris, dictum quis arcu
                    mattis, facilisis suscipit tellus. Morbi non tincidunt ex, quis molestie magna. Suspendisse sed
                    porta diam. Integer sed purus varius, facilisis mauris vulputate, pellentesque massa. Cras
                    suscipit
                    massa pharetra, malesuada ligula ut, vehicula arcu. Curabitur sodales est orci, eget viverra
                    nulla
                    scelerisque non. Sed tincidunt sagittis neque quis consectetur. Vivamus eget purus et eros
                    vehicula
                    convallis. Ut sit amet nunc consequat diam rutrum pellentesque sit amet quis lectus. Curabitur
                    euismod libero eu euismod pellentesque. Aenean felis erat, malesuada non urna vel, pharetra
                    vulputate elit. Donec a est a mi dignissim ornare et ac ligula. Ut mollis pharetra sapien,
                    vulputate
                    gravida leo malesuada in. Morbi ut lacinia enim. Suspendisse sed justo condimentum, volutpat
                    risus
                    nec, commod dolor.
                </p>
            </div>
            <div class="block"></div>
        </div>
        <div class="row">
            <div class="block"></div>
            <div class="block"></div>
        </div>
        <div class="row">
            <div class="block"></div>
        </div>
    </main>
    <?php require "require_footer.html"; ?>
</body>

</html>