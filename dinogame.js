body {
    -webkit-user-select: none;
    -webkit-user-drag: none;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

.container {
    position: relative;
    width: 750px;
    height: 300px;
    margin: 0 auto;
    text-align: center;
}

.intro {
    position: absolute;
    font-size: 24px;
    left: 50%;
    top: 100px;
    transform: translateX(-50%);
}

.game {
    position: relative;
    width: 100%;
    height: 100%;
}

.animate {
    animation: jump 0.3s linear;
}

.trex {
    position: absolute;
    bottom: 25px;
    left: 35px;
    width: 90px;
}

.obstacle {
    position: absolute;
    width: 50px;
    bottom: 35px;
    right: 30px;
    animation: block 1s infinite linear;
}

.track {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: min-content;
}

@keyframes block {
    0% {
        left: 700px;
    }
    100% {
        left: 0;
    }
}

@keyframes jump {
    0% {
        bottom: 25px;
    }
    25% {
        bottom: 75px;
    }
    50% {
        bottom: 100px;
    }
    75% {
        bottom: 75px;
    }
    100% {
        bottom: 25px;
    }
}
