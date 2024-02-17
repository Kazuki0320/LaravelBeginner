<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloController extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_トップページ表示()
    {
        $response = $this->get('hello');
        $response->assertStatus(200);
        $response->assertSeeText('お名前を入力してください。');
    }

    public function test_フォーム送信確認()
    {
        $formData = [
            'msg' => 'かずき'
        ];
        $response = $this->post('hello', $formData);

        $response->assertSeeText('こんにちは、かずきさん');
    }
}
