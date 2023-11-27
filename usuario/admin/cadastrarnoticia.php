<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Notícias</title>
  <!-- Place the first <script> tag in your HTML's <head> -->
  <script src="https://cdn.tiny.cloud/1/pfrz4j26y2bmun8le21r5ub6vv6s9qskuuvrlptxlg8gt5ce/tinymce/6/tinymce.min.js"
    referrerpolicy="origin">
  </script>
</head>

<body>
  <main> 
  
  <h2>Cadastro de Notícias</h2>


  <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
  </script>

  <form action="../../index.php" method="post">
    <textarea name="conteudo">Escreva o texto aqui!</textarea>
    <button type="submit">Salvar notícia</button>
  </form>

  <?php
      if (isset($_POST['conteudo'])) 
      {
        require_once '../services/noticiaservices.class.php';

        NoticiaServices::salvar($_POST['conteudo']);
      }
    ?>
  <!-- F/ enviar para BD -->
  </main>
</body>

</html>