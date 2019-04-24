<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style_display.css')}}"/>
</head>
<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <div id="data">
            <label>Product Description: {{$des}}</label><br/>
            <label>Price: {{$price}}</label><br/>
            <label>Discount Percent: {{$discountPercent}}</label><br/>
            <label>Discount Amount: {{$discountAmount}}</label><br/>
            <label>Discount Price: {{$discountPrice}}</label>
        </div>
    </div>

</body>
</html>