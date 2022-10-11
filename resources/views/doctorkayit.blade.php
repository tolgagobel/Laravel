<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="contaier mt-5">
        <form method="post" action="{{ route('doctorkayit-sonuc')}}">
          @csrf
            <div class="form-group">
                <label>doktor ad soyad</label>
                <input type="text" class="form-control" name="name">
              </div>   
              <div class="form-group">
                <label>Doktor branş</label>
                <input type="text" class="form-control" name="branch">
              </div>  
            <button type="submit" class="btn btn-primary">Kayıt Ol</button>

          </form>
    </div>
</body>
</html>