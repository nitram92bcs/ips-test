<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\InfusionsoftController;
use App\TagEvent;

class tagEventSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     * Get All Tags from InfusionSoft API and insert to DB
     * @return void
     */
    public function run()
    {
        $infusionSoft = new InfusionsoftController();
        $tags = $infusionSoft->testInfusionsoftIntegrationGetAllTags();
        
        foreach($tags->getData() as $tag){    
            $tag = (array)$tag;
            unset($tag['category']);
            TagEvent::create($tag);
        }
    }
}
