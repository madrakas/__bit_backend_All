<?php

namespace Colors\App\Controllers;

use Colors\App\App;
use Colors\App\DB\FileBase;

class ColorController {

    public function index($request){
        $reader = new Filebase('colors');
        $colors = $reader->showAll();

        $sort = $request['sort'] ?? null;
        if ($sort == 'size-asc') {
            usort($colors, fn($a, $b) => $a->size <=> $b->size);
            $sortValue = 'size-desc'; 
        } elseif($sort == 'size-desc') {
            usort($colors, fn($a, $b) => $b->size <=> $a->size);
            $sortValue = 'size-asc'; 
        } else {
            $sortValue = 'size-asc'; 
        }

       
        return App::view('colors/index', [
            'title' => 'All colors',
            'colors' => $colors,
            'sortValue' => $sortValue
        ]);
    }

    public function create(){
        return App::view('colors/create', [
            'title' => 'Create new color'
        ]);

    }

    public function store($request){
        $color = $request['color'] ?? null;
        $size = $request['size'] ?? null;
        $writer = new FileBase('colors');
        $writer->create((object) [
            'color' => $color,
            'size' => $size
        ]);
        App::redirect('colors');
    }

    public function destroy($id){
        $writer = new FileBase('colors');
        $writer->delete($id);
        return App::redirect('colors');
    }

    public function edit($id) {
        $writer = new FileBase('colors');
        $color = $writer->show($id);

        return app::view('colors/edit', [
            'title' => 'Edit color',
            'color' => $color
        ]);
    }

    public function update($id, $request) {
        
        $color = $request['color'];
        $size = $request['size'];

        $writer = new FileBase('colors');
        $writer->update($id, (object)[
            'color' => $color,
            'size' => $size
        ]);

        return App::redirect('colors');
    }
    
}