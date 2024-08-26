<?php
namespace Stormforcejj\Seatminingapi\Http\Controllers;

use Seat\Api\Http\Controllers\Api\v2\ApiController;
use Seat\Eveapi\Models\Character\CharacterInfo;
use Seat\Eveapi\Models\Industry\CharacterMining;

class ApiMiningController extends ApiController
{
    public function getMiningById($id)
    {
        $entries = CharacterMining::where('character_id', $id)
            ->orderBy('time', 'desc');

        return json_encode($entries->get());
    }
}