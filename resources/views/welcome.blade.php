{{-- <!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #label-input {
            transition: all 0.1s ease-in-out;
            color: #8C8D93;
            position: absolute;
            top: 30%;
            transform: scale(0.95);
            opacity: 1;
            pointer-events: none;
        }

        .input-base {
            border-radius: 10px;
        }

        #input:focus~label#label-input,
        #input:not(:placeholder-shown)~#label-input {
            top: -20% !important;
            transform: scale(0.9);
            background: white;
            color: #C09F5E;
            padding: 0 6px;
            opacity: 1;
        }
        
        #input {
            transition: outline 0.2s ease;
            font-size: 1rem;
            outline-color: var(--button-text);
            outline: unset;
            border: 1px solid #bbbbbb;
            padding: 17px 10px 10px 17px;
            width: 100%;
        }

        #input:focus {
            box-shadow: 0 0 0 0px #e8e8e8, 0 0 0 2px #C09F5E;
            background: #FFFFFF;
        }

        .relative {
            position: relative;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="relative">
            <input class="input-cal input-base  form-control" id="input" placeholder=""  type="text">
            <label id="label-input" class="fw-bold" style="right: 10px">تاريخ استلام الملف</label>
        </div>
    </div>

</body>

</html>
 --}}
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> </head>
 <body>

    
    <div>
        <div id='calendar-container' wire:ignore>
            <div id='calendar'></div>
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> </body>
 </html>