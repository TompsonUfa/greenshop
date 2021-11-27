<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\font\stylesheet.css">
    <link rel="stylesheet" href="assets\css\default.css">
    <link rel="stylesheet" href="assets\css\header.css">
    <link rel="stylesheet" href="assets\css\main.css">
    <title>GreenShop</title>
</head>
<body>
    <div class="container">
        <?php include "blocks/header.html" ?>
        <main class="main">
            <div class="slider">
                <div class="slider__wrapper">
                    <div class="slider__items">
                        <div class="slider__item">
                            <div class="slider__left">
                                <h3 class="slider__subtitle">Welcome to GreenShop</h3>
                                <h1 class="slider__title slider__title_mt10">Let’s Make a Better <span>Planet</span></h1>
                                <p class="slider__text">We are an online plant shop offering a wide range of cheap and trendy plants. 
                                    Use our plants to create an unique Urban Jungle. Order your favorite plants!</p>
                                <button class="btn btn_mt44">SHOP NOW</button>     
                            </div>
                            <div class="slider__right">
                                <img class="slider__img" src="assets\img\slider-img\1.png" alt="flower">
                            </div>
                        </div>
                        <div class="slider__item"></div>
                        <div class="slider__item"></div>
                    </div>
                </div>
                <ul class="controls">
                    <li class="controls__item"><button class="controls__btn"></button></li>
                    <li class="controls__item"><button class="controls__btn active"></button></li>
                    <li class="controls__item"><button class="controls__btn"></button></li>
	            </ul>
            </div>
        </main>
        <?php include "blocks/footer.html" ?>
    </div>
</body>
</html>