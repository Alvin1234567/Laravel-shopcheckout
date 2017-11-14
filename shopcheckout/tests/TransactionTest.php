<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Transaction;
use App\User;

class TransactionTest extends TestCase
{
    use DatabaseMigrations;
    
    public function test_user_creation()
    {
        $users = factory(App\User::class, mt_rand(10, 15))->create();
        
        $user_count = count($users) >= 10;
        
        $this->assertTrue($user_count);
    }

    public function test_prodcut_can_be_created()
    {
        $user = factory(App\User::class, 100)->create();
    }

    public function test_transaction_can_be_created()
    {

        $transaction = App\Transaction::create([
            'user_id' => 1,
            'product_id' => 3,
            'product_qty' => 100004,
            'special' => 1,
        ]);

        $this->seeInDatabase('transactions',['user_id'=>1,'product_id'=>3,'product_qty'=>100004,'special'=>1]);

    }
    /**
     * to be developed, Alvin 
     * 
     */
    public function test_amount_due()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }
}
