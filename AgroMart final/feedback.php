<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Reaction</title>
</head>
<body>
    <a href="home.php"><button id="back">Go Back</button></a>
        <input type="radio" name="reaction" id="one">
        <input type="radio" name="reaction" id="two">
        <input type="radio" name="reaction" id="three">
        <input type="radio" name="reaction" id="four">
        <input type="radio" name="reaction" id="five">

        <label for="one">
            <img src="pouting.png" alt="">
        </label>
        <label for="two">
            <img src="steam.png" alt="">
        </label>
        <label for="three">
            <img src="diagonal-mouth.png" alt="">
        </label>
        <label for="four">
            <img src="smiling.png" alt="">
        </label>
        <label for="five">
            <img src="grinning.png" alt="">
        </label>
    </div>
 <!-- CSS For Feedback -->
    <style>
#back{
    width: 20vh;
    font-weight: bold;
    font-size: 20px;
    color: black;
    padding: 10px 10px;
    background: greenyellow;
    border: none;
    border-radius: 30px;
    position: absolute;
    top: 10px;
    left: 20px ;
    cursor: pointer;
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    display: grid;
    place-items: center;
    min-height: 100vh;
    background-color: #0b0b0b;
}
label {
    margin: 0 1rem;
    cursor: pointer;
}
img {
    width: 60px;
    height: 60px;
    opacity: .2;
    transition: 200ms ease-in-out opacity,
                200ms ease-in-out transform;
}
img:active { transform: scale(1.2); }

#one:checked ~ label[for="one"] img,
#two:checked ~ label[for="two"] img,
#three:checked ~ label[for="three"] img,
#four:checked ~ label[for="four"] img,
#five:checked ~ label[for="five"] img {
    opacity: 1;
    animation: rotate 800ms linear;
}
@keyframes rotate {
    from { transform: rotate(0) scale(1.2); }
    to { transform: rotate(360deg) scale(1); }
}
input { display: none; }

    </style>
</html>