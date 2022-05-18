<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Crud App</title>

        <!-- Fonts & Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        <style>
            html {
                height: 100%;
            }

            body {
                background: linear-gradient(LightBlue, darkgray, LightBlue, Royalblue);
                height: 100%;
                margin: 0;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }

            /* h1, h2 {
                background-image: white;
            } */

            h1 {
                color: purple;
                position: relative;
                text-align: center;
                /* border-style: dotted; */
                /* margin-left: 450px;
                margin-right: 450px; */
            }

            h2 {
                color: blue;
                text-align: center;
            }

            #gotobutton {
                align: center;
                position: relative;
                display: flex;
                margin-top: 50px:;
                justify-content: center;
                align-items: center;

            }

            #movie_review {
                display: block;
                margin-top: 30px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 20px;
                border-radius: 25%
                /* margin-left: 100px; */
                /* position: relative;
                justify-content: center;
                align-items: center; */
            }

            #homepagefooter {
                /* position: relative;
                margin-top: 225px;
                text-align: center;
                border-style: solid;
                margin-left: 415px;
                margin-right: 415px; */

                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: violet;
                /* color: white; */
                text-align: center;
                font-weight: bold
            }

            .buttontext {
                font-family: "Cambria";
                font-size: 16px;
            }

            #aboutmovieapp {
                text-align: center;
                margin-top: 20px;
            }

            /* for the table */

            table {
                /* margin-left: auto;
                margin-right: auto;
                position: relative;
                display: block; */
                text-align: center;
            }

            #moviereviewtable {
                position: relative;
                left: 155px;
                margin-top: 15px;
            }

            #createmoviereviewtable, #editmoviereviewtable {
                margin-top: 20px;
                margin-left: 100px;
                margin-right: 100px;
            }

            #showmoviereview {
                position: fixed;
                margin-top: 100px;
                /* left: 0;
                bottom: 0; */
                width: 100%;
                background-color: lightsalmon;
                font-weight: bold;
            }

            #hidden{
                size: 1%;
            }

        </style>

    </head>
    
    <body>
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->yieldContent('content'); ?>

        <!-- <?php echo $__env->yieldContent('crud'); ?> -->
        <footer id=homepagefooter>
            <div>
                <p>
                   [ ©Zack Entertainment, All rights reserved (2022) // Made using Laravel 9.12.2 // website by Zack // version 1.0 ]
                </p>
            </div>
        </footer>
    </body>

</html><?php /**PATH C:\Users\Hewlett Packard\fave\laravel\crud\resources\views/layouts/layout.blade.php ENDPATH**/ ?>