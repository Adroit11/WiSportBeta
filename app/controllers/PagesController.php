<?php

class PagesController extends \BaseController {

        public function index()
        {
            $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
            return View::make('pages.home')->with('posts', $posts);
        }

}
