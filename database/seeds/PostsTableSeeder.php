<?php
// creo un seeder per poter inserire i dati e poterli vedere
use Illuminate\Database\Seeder;
// scrivo il mio collegamento per far funzionare lo slug
use Illuminate\Support\Str;
// // includo sotto il mio model senza non posso fare la mia nuova istanza
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++ ){
            //creare l'istanza
            $newPost = new Post();
            //generare i dati
            $newPost->title = 'Post numero ' . ($i + 1);
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->content = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore totam adipisci nesciunt suscipit. Quas, labore quaerat quo, iusto dolor, dicta cum ipsa quam officiis corporis eos praesentium animi. Maxime, nesciunt?';

            //salvare i dati
            $newPost->save();
        }
    }
}
