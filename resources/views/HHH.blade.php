<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЭисП-9.3</title>
</head>
<body>
@foreach($gg as $e)
<div class="block">
{{$e->Name}}
{{$e->Surname}}
<img class="photo" src="{{$e->Img}}"/>
</div>
@endforeach
<style>
    .block{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        text-align:center;
    }
    .photo{
        height: 200px;
        width: 210px;
        padding-top: 10px;
    }
    </style>

    
</body>
</html>