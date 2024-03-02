$(document).ready(function() {
	// 投稿ボタンのdom取得
  let $submit_button = $('#submitButton');

  // 投稿ボタンを押した時の処理
  $submit_button.click(function() {
    let $message_text = $('#messageForm').val();
    let request_url = '/api/message/store';
    let message_data = {
      message: $message_text
    };

    $.ajax({
      url: request_url,
      type: 'POST',
      data: message_data,
      dataType: 'json',
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  });
})
