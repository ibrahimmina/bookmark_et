<?php

namespace App\Observers;

use App\Book;
use App\Author;
use App\BookAuthor;
use Log;

class BookObserver
{
    /**
     * Handle the book "created" event.
     *
     * @param  \App\Book  $book
     * @return void
     */
    public function created(Book $book)
    {
        //
        Log::debug('Book inserted ' . $book->goodreads_book_id);
/*         $good=simplexml_load_string(file_get_contents('https://www.goodreads.com/book/show/' . str_replace(" ","+",$book->goodreads_book_id) . '.xml?key=C3SzR3sjAlLvr8fx0V3EKA'),'SimpleXMLElement', LIBXML_NOCDATA | LIBXML_NOBLANKS);
        $BookModel = Book::find($book->id);
        
        $BookModel->isbn = (string) $good->book->isbn;
        $BookModel->isbn13 = (string) $good->book->isbn13;
        $BookModel->asin = (string) $good->book->asin;
        $BookModel->kindle_asin = (string) $good->book->kindle_asin;
        $BookModel->marketplace_id = (string) $good->book->marketplace_id;
        $BookModel->country_code = (string) $good->book->country_code;
        $BookModel->publication_year = (int) $good->book->publication_year;
        $BookModel->publication_month = (int) $good->book->publication_month;
        $BookModel->publication_day = (int) $good->book->publication_day;
        $BookModel->publisher = (string) $good->book->publisher;
        $BookModel->language_code = (string) $good->book->language_code;
        $BookModel->is_ebook = (int) $good->book->is_ebook;
        $BookModel->description = (string) $good->book->description;
        $BookModel->num_pages = (int) $good->book->num_pages;
        $BookModel->format = (string) $good->book->format;
        $BookModel->edition_information = (string) $good->book->edition_information;

        $BookModel->save();

        foreach ( $good->book->authors->author as $author){
            if (Author::where('author_name',$author->name)->count() == 0){
                $AuthorModel = new Author;
                $AuthorModel->goodreads_author_id = (string) $author->id;
                $AuthorModel->author_name = (string) $author->name;
                $AuthorModel->image_url = (string) $author->image_url;
                $AuthorModel->small_image_url = (string) $author->small_image_url;
                
                $AuthorModel->save();

                $BookAuthorModel = new BookAuthor;

                $BookAuthorModel->book_id = $BookModel->id;
                $BookAuthorModel->author_id = $AuthorModel->id;

                $BookAuthorModel->save(); 

            }
            
        } */

        Log::debug('Book updated ' . $book->goodreads_book_id);



    }

    /**
     * Handle the book "updated" event.
     *
     * @param  \App\Book  $book
     * @return void
     */
    public function updated(Book $book)
    {
        //
    }

    /**
     * Handle the book "deleted" event.
     *
     * @param  \App\Book  $book
     * @return void
     */
    public function deleted(Book $book)
    {
        //
    }

    /**
     * Handle the book "restored" event.
     *
     * @param  \App\Book  $book
     * @return void
     */
    public function restored(Book $book)
    {
        //
    }

    /**
     * Handle the book "force deleted" event.
     *
     * @param  \App\Book  $book
     * @return void
     */
    public function forceDeleted(Book $book)
    {
        //
    }
}
