<?php

namespace Colors\App\Controllers;

use Colors\App\App;
use Colors\App\DB\FileBase;
use Colors\App\Message;

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

        $colorTrim = ltrim($color, '#');
        // curl to color API here
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://www.thecolorapi.com/id?hex=$colorTrim",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
        ]);

        $response = curl_exec($curl);// atsakymas gali trukti iki 30 sekundziu

        if (false === $response) {
            echo 'Curl error: ' . curl_error($ch);
            die;
        }
        else {
            $response = json_decode($response);
            $colorName = $response->name->value;
        }

        curl_close($curl);

        $writer = new FileBase('colors');
        $writer->create((object) [
            'color' => $color,
            'size' => $size,
            'name' => $colorName ?? 'unknown'
        ]);

        Message::get()->set('success', 'color created');
        App::redirect('colors');
    }

    public function destroy($id){
        $writer = new FileBase('colors');
        $writer->delete($id);
        Message::get()->set('info', 'Color was deleted');
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

        $color = $request['color'] ?? null;
        $size = $request['size'] ?? null;

        $colorTrim = ltrim($color, '#');

        // curl to color API here
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://www.thecolorapi.com/id?hex=$colorTrim",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
        ]);

        $response = curl_exec($curl);// atsakymas gali trukti iki 30 sekundziu

        if (false === $response) {
            echo 'Curl error: ' . curl_error($ch);
            die;
        }
        else {
            $response = json_decode($response);
            $colorName = $response->name->value;
        }

        curl_close($curl);

        $writer = new FileBase('colors');
        $writer->update($id, (object) [
            'color' => $color,
            'size' => $size,
            'name' => $colorName ?? 'unknown'
        ]);

        Message::get()->set('success', 'Color was updated');

        return App::redirect('colors');
    }
    
}