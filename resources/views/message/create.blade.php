<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- csrf対策 --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- jquery --}}
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
		integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  {{-- bootstrap --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
		integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
		integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="message-form">
      <form class="mt-5">
        <div class="message-area">
          <p id="messageContent"></p>
        </div>
        <div class="form-group row">
          <label for="messageForm" class="col-2 offset-3 text-center">メッセージ</label>
          <input type="text" class="form-control col-4" id="messageForm" placeholder="Hi, there!">
          <a href="javascript:void(0)" id="submitButton" class="btn btn-primary ml-1">投稿</a>
        </div>
      </form>
    </div>
  </div>
  <script src="/js/message.js"></script>
</body>
</html>
