<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\RoomType;
use Database\Seeders\StandardRoomTypesSeeder;

class RoomDataDisplayTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // Seed the database to get standard rooms
        $this->seed(StandardRoomTypesSeeder::class);
    }

    /**
     * Test Rooms Index page displays Number of Rooms
     */
    public function test_rooms_index_displays_number_of_rooms()
    {
        $response = $this->get(route('rooms.index'));

        $response->assertStatus(200);
        // Check for specific text format used in the view, e.g. "5 phòng"
        // We know from seeder that Wooden rooms have 5, Rose have 5, Villa has 1.
        $response->assertSee('5 phòng');
        $response->assertSee('1 phòng'); 
    }

    /**
     * Test Rose Zone page displays Children Capacity
     */
    public function test_rose_zone_page_displays_children_capacity()
    {
        $response = $this->get(route('rooms.rose'));

        $response->assertStatus(200);
        // Seeder sets max_children for Rose houses (e.g. 2 or 4)
        // Adjust expectation based on seeder content
        $response->assertSee('trẻ em');
    }

    /**
     * Test Villa Zone page displays correct data
     */
    public function test_villa_zone_page_displays_dynamic_data()
    {
        $response = $this->get(route('rooms.villa'));

        $response->assertStatus(200);
        
        $villa = RoomType::where('name', 'LIKE', '%Villa%')->first();
        
        $response->assertSee($villa->name);
        $response->assertSee($villa->max_capacity . ' người lớn');
        // Check for children and num rooms
        $response->assertSee($villa->max_children . ' trẻ em');
        $response->assertSee($villa->number_of_rooms . ' phòng ngủ');
        
        // Check for View Detail button
        $response->assertSee(route('rooms.show', $villa->id));
        $response->assertSee('XEM CHI TIẾT');
    }

    /**
     * Test Room Detail page displays extended info
     */
    public function test_room_detail_page_displays_extended_info()
    {
        $room = RoomType::first();
        $response = $this->get(route('rooms.show', $room->id));

        $response->assertStatus(200);
        
        $response->assertSee('trẻ em');
        $response->assertSee('phòng'); // "X phòng"
        $response->assertSee($room->max_children);
        $response->assertSee($room->number_of_rooms);
    }
}
