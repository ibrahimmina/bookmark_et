<?php
use Illuminate\Database\Seeder;

use App\Product;
use App\Address;
use App\Book;
use App\Author;
use App\BookAuthor;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Product::create([
            'book_id' => 10 , 
            'user_id' => 9 , 
            'price' => 86 , 
            'featured' => False , 
            'quantity' => 24 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 36 , 
            'user_id' => 11 , 
            'price' => 36 , 
            'featured' => True , 
            'quantity' => 73 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 20 , 
            'user_id' => 47 , 
            'price' => 31 , 
            'featured' => True , 
            'quantity' => 96 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 6 , 
            'user_id' => 28 , 
            'price' => 60 , 
            'featured' => False , 
            'quantity' => 80 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 6 , 
            'user_id' => 50 , 
            'price' => 64 , 
            'featured' => True , 
            'quantity' => 95 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 30 , 
            'user_id' => 3 , 
            'price' => 50 , 
            'featured' => False , 
            'quantity' => 66 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 25 , 
            'user_id' => 45 , 
            'price' => 16 , 
            'featured' => True , 
            'quantity' => 1 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 10 , 
            'user_id' => 27 , 
            'price' => 79 , 
            'featured' => False , 
            'quantity' => 70 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 9 , 
            'user_id' => 25 , 
            'price' => 32 , 
            'featured' => False , 
            'quantity' => 44 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 24 , 
            'user_id' => 8 , 
            'price' => 84 , 
            'featured' => True , 
            'quantity' => 9 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 23 , 
            'user_id' => 9 , 
            'price' => 85 , 
            'featured' => False , 
            'quantity' => 61 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 16 , 
            'user_id' => 24 , 
            'price' => 73 , 
            'featured' => False , 
            'quantity' => 44 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 19 , 
            'user_id' => 16 , 
            'price' => 43 , 
            'featured' => False , 
            'quantity' => 38 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 3 , 
            'user_id' => 4 , 
            'price' => 65 , 
            'featured' => True , 
            'quantity' => 52 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 12 , 
            'user_id' => 36 , 
            'price' => 37 , 
            'featured' => False , 
            'quantity' => 68 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 22 , 
            'user_id' => 15 , 
            'price' => 74 , 
            'featured' => True , 
            'quantity' => 86 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 21 , 
            'user_id' => 10 , 
            'price' => 79 , 
            'featured' => False , 
            'quantity' => 53 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 36 , 
            'user_id' => 50 , 
            'price' => 51 , 
            'featured' => True , 
            'quantity' => 79 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 28 , 
            'user_id' => 48 , 
            'price' => 42 , 
            'featured' => True , 
            'quantity' => 23 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 10 , 
            'user_id' => 39 , 
            'price' => 38 , 
            'featured' => True , 
            'quantity' => 21 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 7 , 
            'user_id' => 48 , 
            'price' => 25 , 
            'featured' => False , 
            'quantity' => 13 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 4 , 
            'user_id' => 34 , 
            'price' => 27 , 
            'featured' => True , 
            'quantity' => 77 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 31 , 
            'user_id' => 31 , 
            'price' => 42 , 
            'featured' => True , 
            'quantity' => 68 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 21 , 
            'user_id' => 50 , 
            'price' => 39 , 
            'featured' => False , 
            'quantity' => 74 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 37 , 
            'user_id' => 3 , 
            'price' => 34 , 
            'featured' => True , 
            'quantity' => 62 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 13 , 
            'user_id' => 3 , 
            'price' => 56 , 
            'featured' => True , 
            'quantity' => 30 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 29 , 
            'user_id' => 5 , 
            'price' => 24 , 
            'featured' => True , 
            'quantity' => 6 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 12 , 
            'user_id' => 42 , 
            'price' => 36 , 
            'featured' => True , 
            'quantity' => 11 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 24 , 
            'user_id' => 6 , 
            'price' => 75 , 
            'featured' => True , 
            'quantity' => 99 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 15 , 
            'user_id' => 48 , 
            'price' => 62 , 
            'featured' => True , 
            'quantity' => 34 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 9 , 
            'user_id' => 45 , 
            'price' => 19 , 
            'featured' => True , 
            'quantity' => 67 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 6 , 
            'user_id' => 34 , 
            'price' => 23 , 
            'featured' => False , 
            'quantity' => 94 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 17 , 
            'user_id' => 25 , 
            'price' => 37 , 
            'featured' => True , 
            'quantity' => 34 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 1 , 
            'user_id' => 45 , 
            'price' => 31 , 
            'featured' => False , 
            'quantity' => 39 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 38 , 
            'user_id' => 41 , 
            'price' => 47 , 
            'featured' => True , 
            'quantity' => 32 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 17 , 
            'user_id' => 44 , 
            'price' => 41 , 
            'featured' => False , 
            'quantity' => 27 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 12 , 
            'user_id' => 8 , 
            'price' => 3 , 
            'featured' => True , 
            'quantity' => 31 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 2 , 
            'user_id' => 28 , 
            'price' => 42 , 
            'featured' => False , 
            'quantity' => 9 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 20 , 
            'user_id' => 42 , 
            'price' => 2 , 
            'featured' => False , 
            'quantity' => 38 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 16 , 
            'user_id' => 8 , 
            'price' => 12 , 
            'featured' => True , 
            'quantity' => 63 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 33 , 
            'user_id' => 3 , 
            'price' => 83 , 
            'featured' => False , 
            'quantity' => 51 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 17 , 
            'user_id' => 2 , 
            'price' => 73 , 
            'featured' => False , 
            'quantity' => 56 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 6 , 
            'user_id' => 5 , 
            'price' => 58 , 
            'featured' => False , 
            'quantity' => 62 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 16 , 
            'user_id' => 40 , 
            'price' => 31 , 
            'featured' => True , 
            'quantity' => 55 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 8 , 
            'user_id' => 15 , 
            'price' => 0 , 
            'featured' => True , 
            'quantity' => 82 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 19 , 
            'user_id' => 6 , 
            'price' => 67 , 
            'featured' => True , 
            'quantity' => 90 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 16 , 
            'user_id' => 43 , 
            'price' => 86 , 
            'featured' => False , 
            'quantity' => 98 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 6 , 
            'user_id' => 4 , 
            'price' => 93 , 
            'featured' => False , 
            'quantity' => 53 , 
            'sell' => False 
        ]);
        App\Product::create([
            'book_id' => 24 , 
            'user_id' => 21 , 
            'price' => 66 , 
            'featured' => True , 
            'quantity' => 23 , 
            'sell' => True 
        ]);
        App\Product::create([
            'book_id' => 29 , 
            'user_id' => 35 , 
            'price' => 53 , 
            'featured' => False , 
            'quantity' => 41 , 
            'sell' => False 
        ]);
    }
}
