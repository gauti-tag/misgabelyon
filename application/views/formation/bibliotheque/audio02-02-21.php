<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no">
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="<?php echo site_url(); ?>assets/img/favicon.png">
    <title>MISGAB’ELYÔN, L’AMOUR MISERICORDIEUX</title>
    <!-- <link rel="stylesheet" href="./styles.css"> -->

    <style>

        html {
            width: 100%;
            height: 100%;
            overflow: visible;
            padding: 0;
            margin: 0;
            outline: 0;
        }

        body {

            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            overflow: hidden;
            background: #032254;
            background: -moz-linear-gradient(-45deg, #ffd700 0%, #032254 100%);
            background: -webkit-linear-gradient(-45deg, #ffd700 0%, #032254 100%);
            background: linear-gradient(135deg, #ffd700 0%, #032254 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd700', endColorstr='#032254', GradientType=2);
            font-family: "Helvetica Neue", "Futura", "Trebuchet MS", Arial;
            -webkit-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
            display: block;

           /* background: url("assets/img/adoration1.jpg");
            background-size: cover; */

            }

        /* Top Info */
        #title {
            position: absolute;
            width: 100%;
            top: 3%;
            line-height: 34px;
            height: 34px;
            text-align: center;
            font-size: 34px;
            opacity: 0.9;
            font-weight: 300;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.33);
        }
        #timer {
            position: absolute;
            top: 0;
            left: 3%;
            text-align: left;
            font-size: 26px;
            opacity: 0.9;
            font-weight: 300;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.33);
        }
        #duration {
            position: absolute;
            top: 0;
            right: 3%;
            text-align: right;
            font-size: 26px;
            opacity: 0.5;
            font-weight: 300;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.33);
        }

        /* Controls */
        .controlsOuter {
            position: absolute;
            width: 100%;
            height: 70px;
            bottom: 3%;
        }
        .controlsInner {
            position: absolute;
            width: 340px;
            height: 70px;
            left: 50%;
            margin: 0 -170px;
        }
        .btn {
            position: absolute;
            cursor: pointer;
            opacity: 0.9;
            -webkit-filter: drop-shadow(1px 1px 2px rgba(0, 0, 0, 0.33));
            filter: drop-shadow(1px 1px 2px rgba(0, 0, 0, 0.33));
            -webkit-user-select: none;
            user-select: none;
        }
        .btn:hover {
            opacity: 1;
        }
        #playBtn {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABGCAYAAACaGVmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QThERThENUFDNkJEMTFFNTk2RTBDMTRBMkYyNjVGMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QThERThENUJDNkJEMTFFNTk2RTBDMTRBMkYyNjVGMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBOERFOEQ1OEM2QkQxMUU1OTZFMEMxNEEyRjI2NUYzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBOERFOEQ1OUM2QkQxMUU1OTZFMEMxNEEyRjI2NUYzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PnFM7yIAAAFWSURBVHja7NRJDoMwDEDRcPL2ZoVeLEUtCyoCZPBsf8mS10+Wp5zzK6X0XGdJ0bdpRcnbPgfOESUFzjmKe5wrFLc4NSjucFpQ3OD0oJjHGUExiwOBYg4HEsUMDgaKehxMFLU4FCjqcChR1OBwoIjH4UQRiyMBRRyOJBQxOBJR2HEko7DhaEAhx9GEQoajEQUdRzMKGo4FFHAcSyhgOBZRhnEso3TjeEBpxvGEUo3jEeUWxzPKKU6gFHACpYATKMfegbLDWOcRl/Jr2X7JHI+2gOEZ5RTDI8othieUagwPKM0YllG6MSyiDGNYQgHDsIACjqEZBQ1DIwo6hiYUMgwNKOQYklHYMCSisGNIQhGDIQFFHAYnilgMDhTxGJQoajAoUNRhYKKoxcBAUY8BiWIGAwLFHMYIilmMHhTzGC0objBqUNxhXKG4xSihuMfYo8yB8d9HgAEATyefBJWpw70AAAAASUVORK5CYII=');
            width: 69px;
            height: 70px;
            left: 50%;
            margin: auto -34.5px;
        }
        #pauseBtn {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABGCAYAAACaGVmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MDE4MjkzRjNDNzI0MTFFNTk2RTBDMTRBMkYyNjVGMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MDE4MjkzRjRDNzI0MTFFNTk2RTBDMTRBMkYyNjVGMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBOERFOEQ1Q0M2QkQxMUU1OTZFMEMxNEEyRjI2NUYzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDowMTgyOTNGMkM3MjQxMUU1OTZFMEMxNEEyRjI2NUYzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pne5d1AAAAB8SURBVHja7NCxCQAwAALBuP/QZoEUlinua0G4tD1j83Asv/4GChQoUKBAgQIFChQoUKBAgQIFChQoUKBAgQIFChQoUKBAgQIFChQoUKBAgQIFChQoUKBAgQIFChQoUKBAgQIFChQoUKBAgQIFChQoUKBAgQIFCpRXV4ABAOgpXYTDYwEwAAAAAElFTkSuQmCC');
            width: 69px;
            height: 70px;
            left: 50%;
            margin: auto -34.5px;
            display: none;
        }
        #prevBtn {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MDE4MjkzRkJDNzI0MTFFNTk2RTBDMTRBMkYyNjVGMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MDE4MjkzRkNDNzI0MTFFNTk2RTBDMTRBMkYyNjVGMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDowMTgyOTNGOUM3MjQxMUU1OTZFMEMxNEEyRjI2NUYzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDowMTgyOTNGQUM3MjQxMUU1OTZFMEMxNEEyRjI2NUYzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PndeAH8AAACtSURBVHja7NXJCcAgEAVQEevK0lk6M1aW6CGQQBBn+ephBv7F0wNn8Vd7OWCWnOjd2FpzYk7K2cJAxFEA78cwA6I3porohWlCoDEkBArDQmhjRAgtjApCilFFcDEQBAcTUYinKLcJCqFinGEMYxjDgDFpJkzZwDsSRf2mE4ni9gwEJW1gVZTWNKmgtEdbhELtGRYKvfRIqF4buAnV+xxUUaNu0y9q9KH8oG4BBgDjdpk0jMoz1gAAAABJRU5ErkJggg==');
            width: 35px;
            height: 35px;
            left: 0;
            top: 50%;
            margin: -17.5px auto;
        }
        #nextBtn {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MDE4MjkzRjdDNzI0MTFFNTk2RTBDMTRBMkYyNjVGMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MDE4MjkzRjhDNzI0MTFFNTk2RTBDMTRBMkYyNjVGMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDowMTgyOTNGNUM3MjQxMUU1OTZFMEMxNEEyRjI2NUYzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDowMTgyOTNGNkM3MjQxMUU1OTZFMEMxNEEyRjI2NUYzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiFbkXsAAACvSURBVHja7NZBDoAgDARA9GPiz/yZ8DKsxgMHY1rYBQ5sshdCwiQcWpdSOqWb1BGrSn6RiTJjmKhiDANVjUGiYBgECo6pQdEwJSg6xoJqhtGgVFkeETZBekhjdqZ6g4H5QnXH5Cg/CkadiZmYiZkYdtYGb8QRMDdi144C1jfFd0AG69RG7jNB6nsvV3+IZhgNgo6xIGiYEgQcU4OAYRCIagwSUYxhIMwYJsKEuQQYABTs+qTMuF1rAAAAAElFTkSuQmCC');
            width: 35px;
            height: 35px;
            right: 0;
            top: 50%;
            margin: -17.5px auto;
        }
        #playlistBtn {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MUVBQzMwNzRDNzI0MTFFNTk2RTBDMTRBMkYyNjVGMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MUVBQzMwNzVDNzI0MTFFNTk2RTBDMTRBMkYyNjVGMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxRUFDMzA3MkM3MjQxMUU1OTZFMEMxNEEyRjI2NUYzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoxRUFDMzA3M0M3MjQxMUU1OTZFMEMxNEEyRjI2NUYzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PnWBPa0AAADGSURBVHjaYvz//z/DYAFMDIMIjDpm1DHDwjH/0fDugXAMCxK7AojPAnEHmpo0IFaisTsqIEECLPT+Q4ALlL0bihmQ+LQGYLsYoSXwf2iovAdiYyjbdaCiaQ+S2FkopjtgHK2bCESTC5r4+4GIKuQEjAz2DGQCHhTlDAtaLtoDjSJkoATN7iMzmjrRxO+NljODsZzpwBJNs0bLGShwhToCvWHVQYes7YruGJiFgljKmpEbTa5YKsrRcmbUMaOOGXUMNQBAgAEAm2XFJrn+jrsAAAAASUVORK5CYII=');
            width: 35px;
            height: 35px;
            top: 50%;
            left: 3%;
            margin: -17.5px auto;
        }
        #volumeBtn {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MUVBQzMwNzBDNzI0MTFFNTk2RTBDMTRBMkYyNjVGMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MUVBQzMwNzFDNzI0MTFFNTk2RTBDMTRBMkYyNjVGMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxRUFDMzA2RUM3MjQxMUU1OTZFMEMxNEEyRjI2NUYzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoxRUFDMzA2RkM3MjQxMUU1OTZFMEMxNEEyRjI2NUYzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PtAZ+FgAAAHRSURBVHja7FjRbYMwEIWqC7CCO4IzgjMCHYEV6AjuCHSEMAKMkIwAI5ARXFt9rox1phDA5KMnPSGwOZ4fx/mOVCmVPIu9JE9ke5GRGpejyeQanUapkXlj5lzEIMM1GqjRAyG1eNCLCeAVyDQq9WOdRoHrDeDP7YCM8reGiNQYQER6D6DIGHDc02xFJsfqjF00GDEnRCaBegp+RmMp8oyYERcmAAvMvWl8aLSBuQ2O58D4Ff7eqJiZa4MTF1OYUsZAwF9BKaOw0tsf6pjx+wwVXWU41Pwk1DF2opQRK7+skDIyECMlrv8GfoztwMaW9K7XTqKMujeZV8SQma31eO0iNpkW8L/a3t02Yu7aITL8CDL2S2VE/jqsnnHJ3I8urnpKldhkOEFmdB6TTO7kFveVRScjoExLqBWVTIbsax765RFh7n74GoFMiQefCLXcbWFEhs/MFfeFZGon9fsx1I78PVDPyA3qmXyqnhEzV1lgRT124/rBSq+Dj/Pa7sDUPVesrEGRvUSZMlQ/rSmgCqc7qBZ0B7aQ37RVsb2QJOIp1DcNUDXbg4wFw2qV06j5ZCqQYSE/yYZ1LxVPvjJ86v50p/8ztr96X3JT+v+zKGDfAgwAZkMcn0x+AsMAAAAASUVORK5CYII=');
            width: 35px;
            height: 35px;
            top: 50%;
            right: 3%;
            margin: -17.5px auto;
        }

        /* Progress */
        #waveform {
            width: 100%;
            height: 30%;
            position: absolute;
            left: 0;
            top: 50%;
            margin: -15% auto;
            display: none;
            cursor: pointer;
            opacity: 0.8;
            -webkit-user-select: none;
            user-select: none;
        }
        #waveform:hover {
            opacity: 1;
        }
        #bar {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.33);
            opacity: 0.9;
        }
        #progress {
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.1);
            z-index: -1;
        }

        /* Loading */
        #loading {
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -35px;
            width: 70px;
            height: 70px;
            background-color: #fff;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
            animation: sk-scaleout 1.0s infinite ease-in-out;
            display: none;
        }
        @-webkit-keyframes sk-scaleout {
            0% { -webkit-transform: scale(0) }
            100% {
                -webkit-transform: scale(1.0);
                opacity: 0;
            }
        }
        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            } 100% {
                  -webkit-transform: scale(1.0);
                  transform: scale(1.0);
                  opacity: 0;
              }
        }

        /* Plylist */
            #playlist {
               width: 100%;
               height: 100%;
               position: absolute;
               top: 0;
               left: 0;
               background-color: rgba(0, 0, 0, 0.5);
               display: none;


           }
          #list {
               width: 100%;
               height: 100%;
               position: absolute;
               top: 0;
               left: 0;
               display: -webkit-box;
               display: -ms-flexbox;
               display: flex;
               -webkit-box-orient: vertical;
               -webkit-box-direction: normal;
               -ms-flex-direction: column;
               flex-direction: column;
               -webkit-box-pack: center;
               -ms-flex-pack: center;
               justify-content: center;
               -webkit-box-align: center;
               -ms-flex-align: center;
               align-items: center;
               overflow: auto;

           }

        .list-song {
            width: 100%;
            height: 120px;
            font-size: 50px;
            line-height: 120px;
            text-align: center;
            font-weight: bold;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.33);
            display: table-column;


        }
        .list-song:hover {
            background-color: rgba(255, 255, 255, 0.1);
            cursor: pointer;
        }

        /* Volume */
        #volume {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            touch-action: none;
            -webkit-user-select: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            display: none;
        }
        .bar {
            position: absolute;
            top: 50%;
            left: 5%;
            margin: -5px auto;
            height: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.33);
        }
        #barEmpty {
            width: 90%;
            opacity: 0.5;
            box-shadow: none;
            cursor: pointer;
        }
        #barFull {
            width: 90%;
        }
        #sliderBtn {
            width: 50px;
            height: 50px;
            position: absolute;
            top: 50%;
            left: 93.25%;
            margin: -25px auto;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.33);
            border-radius: 25px;
            cursor: pointer;
        }

        /* Fade-In */
        .fadeout {
            webkit-animation: fadeout 0.5s;
            -ms-animation: fadeout 0.5s;
            animation: fadeout 0.5s;
        }
        .fadein {
            webkit-animation: fadein 0.5s;
            -ms-animation: fadein 0.5s;
            animation: fadein 0.5s;
        }
        @keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
        @-webkit-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
        @-ms-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
        @keyframes fadeout {
            from { opacity: 1; }
            to   { opacity: 0; }
        }
        @-webkit-keyframes fadeout {
            from { opacity: 1; }
            to   { opacity: 0; }
        }
        @-ms-keyframes fadeout {
            from { opacity: 1; }
            to   { opacity: 0; }
        }

    </style>

</head>
<body>

<header class="top-header">
    <div class="container">
            <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo site_url(); ?>assets/img/logo_misgabelyion.png" alt="logo">
                </a>
            </div>
    </div>
</header>

<!-- Top Info -->
<div id="title" style="margin-top: 150px">
    <span id="track"></span>
    <div id="timer">0:00</div>
    <div id="duration">0:00</div>
</div>

<!-- Controls -->
<div class="controlsOuter">
    <div class="controlsInner">
        <div id="loading"></div>
        <div class="btn" id="playBtn"></div>
        <div class="btn" id="pauseBtn"></div>
        <div class="btn" id="prevBtn"></div>
        <div class="btn" id="nextBtn"></div>
    </div>
    <div class="btn" id="playlistBtn"></div>
    <div class="btn" id="volumeBtn"></div>
</div>

<!-- Progress -->
<div id="waveform"></div>
<div id="bar"></div>
<div id="progress"></div>

<!-- Playlist -->
<div id="playlist">
    <div id="list"></div>
</div>

<!-- Volume -->
<div id="volume" class="fadeout">
    <div id="barFull" class="bar"></div>
    <div id="barEmpty" class="bar"></div>
    <div id="sliderBtn"></div>
</div>

<!-- Scripts -->
<script src="<?php echo site_url(); ?>assets/js/howler.core.js"></script>
<script src="<?php echo site_url(); ?>assets/js/siriwave.js"></script>
<script src="<?php echo site_url(); ?>assets/js/player.js"></script>
</body>
</html>