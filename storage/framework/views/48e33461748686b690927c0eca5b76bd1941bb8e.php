<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
</head>

<body>
    <form action="/thanks" method="POST">
     <?php echo csrf_field(); ?>
     <div>氏名</div>
     <br>
     <input type="text" name="name">
     <div>メールアドレス</div>
     <br>
     <input type="text" name="mail">
     <br>
     <input type="submit" name="send">
    </form>
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/contact_form/resources/views/index.blade.php ENDPATH**/ ?>